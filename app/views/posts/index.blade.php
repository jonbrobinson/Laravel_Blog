@extends('layouts.master')


@section('content')

<h2>
	Lost in Coding
</h2>
<div class="col-md-4">
	<div class="row">
		<h4> About</h4>
		<p>This is a Blog I built using Laravel, a PHP Framework, and designed using Twitter Bootstrap.  THe Post are here to give a little insight into programmer as they search or there next position. I recently jumped into programming and I am excited for the future.  To see a little outside my programming life </p>
	</div>
</div>
<div class="col-md-8">
	<div class="row"> <!------ Search Field ------>
		{{Form::open(array('action' => array('PostsController@index'), 'method' => 'GET'))}}
			{{ Form::text('search', null, array('placeholder' => 'Search Query')) }}
			{{ Form::submit('Search') }}
			{{ link_to_action('PostsController@create', 'New Post', null, array("class" => "btn btn-sm btn-success pull-right", "role" => "button")) }}
		{{ Form::close() }}
	</div>
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

	{{ $posts->appends(array('search' => Input::get('search')))->links() }}
	<hr>
</div>
@stop