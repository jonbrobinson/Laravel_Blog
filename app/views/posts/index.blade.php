@extends('layouts.master')


@section('content')

	<h2>My Blog</h2>
	<table>
		<tr>
			<th>Title</th><th>Creation Date</th><th>Action</th>
		</tr>
		@foreach ($posts as $post)
		<tr>
			<td><a href="{{ action('PostsController@show', $post->id) }}">{{{ $post->title }}}</a></td>
			<td>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</td>
			<td><a href="{{ action('PostsController@edit', $post->id) }}" >Edit</a></td>
		</tr>
		@endforeach
	</table>
	<br>
	{{ $posts->links() }}

	{{Form::open(array('action' => array('PostsController@index'), 'method' => 'GET'))}}
		<div>
			{{ Form::text('search', null, array('placeholder' => 'Search Query')) }}
			{{ Form::submit('Search') }}
		</div>
	{{ Form::close() }}
	<hr>

	{{ link_to_action('PostsController@create', 'New Post') }}
@stop