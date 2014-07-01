@extends('layouts.master')


@section('topscript')
@stop
@section('content')
	<h1>Simple Form</h1>
	@if ($errors->has('title'))
	{{{ $errors->first('title', '<span class="help-block">:message</span>' )}}};
	@endif
	<form action="{{{ action('PostsController@store') }}}" method="post">
		<p>
	        <label for="title">Title</label>
	        <input id="title" name="title" type="text" value="{{{ Input::old('title') }}}" placeholder="Title">
	    </p>
	    <p>
	        <label for="body">Body</label>
	        <textarea id="body" name="body"placeholder="Message">{{{ Input::old('body') }}}</textarea>
	    </p>
	    <p>
	        <button type="submit">Submit</button>
	    </p>
	</form>
@stop
@section('bottomscript')
@stop