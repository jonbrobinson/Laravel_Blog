@extends('layouts.master')


@section('content')
	<h3>{{{$post->title}}}</h3>
	<p>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</p>
	<p>{{{$post->body}}}</p>

	{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE'))  }}
		{{ Form::submit('Delete') }}
	{{ Form::close() }}
@stop