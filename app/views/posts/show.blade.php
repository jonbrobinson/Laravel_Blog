@extends('layouts.master')


@section('content')
<div class="col-md-8 col-md-offset-2">
	<h2>{{{$post->title}}}{{ link_to_action('PostsController@index', 'Home', null, array("class" => "btn btn-xs btn-primary pull-right", "role" => "button")) }}</h2>
	<h4>Author: {{{ $post->user->first_name }}} {{{ $post->user->last_name }}}</h4>
	<p>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</p>
	<p>{{ $post->renderBody() }}</p>

	@if($post->img_path)
		<img src="{{ $post->img_path }}" class="img-repsonsive">
	@endif

	@if(Auth::check())
	{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE'))  }}
		{{ Form::submit('Delete') }}
	{{ Form::close() }}
	@endif
</div>
@stop