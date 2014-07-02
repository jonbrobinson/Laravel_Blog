@extends('layouts.master')

@section('content')

	<h1>Edit Post</h1>

	{{Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT'))}}
		<div>
			{{ Form::label('title', 'Title') }}<br>
			{{ Form::text('title') }}<br>
			{{ $errors->first('title', '<<span class="help-block">:mesage</span>')}}<br>
		</div>
		<div>
			{{ Form::label('body', 'Body') }}<br>
			{{ Form::textarea('body') }}<br>
			{{ $errors->first('body', '<<span class="help-block">:mesage</span>')}}
		</div>
		{{Form::submit('Save Post')}}
	{{ Form::close() }}
@stop