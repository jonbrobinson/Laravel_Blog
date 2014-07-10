@extends('layouts.master')

@section('content')
<div class="col-md-8 col-md-offset-2">
	<h1>Edit Post</h1>
	<hr>
	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'files' => true)) }}
		<div class="form-group">
			{{ Form::label('title', 'Title') }}<br>
			{{ Form::text('title') }}<br>
			{{ $errors->first('title', '<span class="help-block">:mesage</span>')}}<br>
		</div>
		<div>
			{{ Form::label('image', 'Add Image') }}<br>
			{{ Form::file('image') }}<br>
		</div>
		<div class="form-group">
			{{ Form::label('body', 'Body') }}<br>
			{{ Form::textarea('body', null,['class'=> 'form-control', 'placeholder' => 'Enter Text']) }}<br>
			{{ $errors->first('body', '<span class="help-block">:mesage</span>')}}
		</div>
		{{Form::submit('Save', ['class' => 'btn btn-success'])}}
	{{ Form::close() }}
</div>
@stop