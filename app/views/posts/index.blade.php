@extends('layouts.master')


@section('content')

<h2>My Blog</h2>

<!------ Table to Display Blog Post ------>
<table class="table table-striped">
	<tr>
		<th>
			Title
		</th>
		<th>
			User
		</th>
		<th>
			Creation Date
		</th>
		<th>
			Action
		</th>
	</tr>
	@foreach ($posts as $post)
	<tr>
		<td><a href="{{ action('PostsController@show', $post->id) }}">{{{ $post->title }}}</a></td>
		<td>{{{ $post->user->first_name }}} {{{ $post->user->last_name }}}</td>
		<td>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</td>
		<td><a href="{{ action('PostsController@edit', $post->id) }}" >Edit</a></td>
	</tr>
	@endforeach
</table> <!-- End Table -->
<br>


<!------ Search Field ------>
{{ $posts->appends(array('search' => Input::get('search')))->links() }}

{{Form::open(array('action' => array('PostsController@index'), 'method' => 'GET'))}}
	<div>
		{{ Form::text('search', null, array('placeholder' => 'Search Query')) }}
		{{ Form::submit('Search') }}
	</div>
{{ Form::close() }}
<hr>

{{ link_to_action('PostsController@create', 'New Post', array("class" => "btn btn-default btn-success active", "role" => "button")) }}
@stop