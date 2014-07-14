<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showLogin()
	{
		return View::make('login');
	}

	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if(Auth::attempt(array('email' => $email, 'password' => $password)))
		{
			return Redirect::intended(action('PostsController@index'));
		}
		else
		{
			Session::flash('errorMessage', 'Email or Password not found.');
			return Redirect::action('HomeController@showLogin')->withInput();
		}
	}

	public function doLogout()
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
	}

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function sayhello ($name)
	{
			if ($name == "Chris")
		{
		    return Redirect::to('/');
		}
			else
		{
			$data = array(
				'name'=> $name
			);
		    return View::make('temp.my_first_view')->with($data);
		}
	}

	public function portfolio_route()
	{
		$data = [
		'title' => 'Jonathan Robinson',
		'body_id' => 'page-top',
		'body_class' => 'index'
		];
		return View::make('pages.portfolio')->with($data);
	}

	public function resume_route()
	{
		return View::make('pages.resume');
	}

	public function popshot()
	{
		$data = [
		'title' => 'Pop-A-Shot',
		];
		return View::make('pages.popshot')->with($data);
	}

}
