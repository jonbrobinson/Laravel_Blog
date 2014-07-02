@extends('layouts.master')


@section('content')
	<h3>{{{$post->title}}}</h3>
	<p>{{{$post->body}}}</p>

	{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE'))  }}
		{{ Form::submit('Delete') }}
	{{ Form::close() }}
@stop