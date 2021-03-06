<?php

class PostsController extends \BaseController {

	public function __construct()
	{
	    // call base controller constructor
	    parent::__construct();

	    // run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(6);

		if (Input::has('search'))
		{
			$search =  Input::get('search');
			$posts = Post::with('user')->where("title", "LIKE", "%$search%")->paginate(6);
		}

		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails())
		{
			// set flash data
			Session::flash('errorMessage', 'Error: Missing Some Input');

			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			// set flash data
			Session::flash('successMessage', 'Success: New Post Added');

			$post = new Post();
			$post->user_id = Auth::user()->id;
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->slug = Input::get('title');
			$post->save();

			if (Input::hasFile('image') && Input::file('image')->isValid()){

				$post->addUploadImage(Input::file('image'));
				$post->save();
			}

			return Redirect::action('PostsController@show', $post->slug);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$post = Post::findBySlug($slug);
		return View::make('posts.show')->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with('post', $post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);

		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails())
		{
			// set flash data
			Session::flash('errorMessage', 'Error: Missing Some Input');
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{

			Session::flash('successMessage', 'Success: Post Updated');

			$post->user_id = Auth::user()->id;
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->slug = Input::get('title');
			$post->save();

			if (Input::hasFile('image') && Input::file('image')->isValid()){

				$post->addUploadImage(Input::file('image'));
				$post->save();
			}

			return Redirect::action('PostsController@show', $post->slug);
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::findorfail($id);
		$post->delete();
		Session::flash('successMessage', 'Success: Post Deleted');
		return Redirect::action('PostsController@index');
	}


}
