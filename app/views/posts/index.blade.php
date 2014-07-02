@extends('layouts.master')


@section('content')

	<h2>My Blog</h2>

	@foreach ($posts as $post)
		{{ link_to_action('PostsController@show', $post->title, array($post->id)) }}
		<br>
	@endforeach

	<br>
	{{ $posts->links() }}
	<hr>

	{{ link_to_action('PostsController@create', 'New Post') }}
@stop