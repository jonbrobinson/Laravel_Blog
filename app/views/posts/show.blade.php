@extends('layouts.master')


@section('content')
<div class="col-md-8 col-md-offset-2">
	<h2>{{{$post->title}}}{{ link_to_action('PostsController@index', 'Home', null, array("class" => "btn btn-xs btn-primary pull-right", "role" => "button")) }}</h2>
	<p>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</p>
	<p>{{{$post->body}}}</p>

	{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE'))  }}
		{{ Form::submit('Delete') }}
	{{ Form::close() }}
</div>
@stop