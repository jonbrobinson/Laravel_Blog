@extends('layouts.master')

@section('content')
<div class="col-md-8 col-md-offset-2">
	<h1>Create Post {{ link_to_action('PostsController@index', 'Home', null, array("class" => "btn btn-xs btn-primary pull-right", "role" => "button")) }}</h1>

	{{Form::open(array('action' => 'PostsController@store', 'method' => 'POST', 'role' => 'form', 'files' => true) )}}
		<div class="form-group">
			{{ Form::label('title', 'Title') }}<br>
			{{ Form::text('title') }}<br>
			{{ $errors->first('title', '<<span class="help-block">:mesage</span>')}}<br>
		</div>
		<div>
			{{ Form::label('image', 'Add Image') }}<br>
			{{ Form::file('image') }}<br>
		</div>
		<div class="form-group wmd-panel">
			{{ Form::label('body', 'Body') }}<br>
			<div id="wmd-button-bar"></div>
			{{ Form::textarea('body', null ,['class'=> 'form-control wmd-input', 'id' => 'wmd-input', 'placeholder' => 'Enter Text']) }}<br>
			{{ $errors->first('body', '<span class="help-block">:mesage</span>')}}

		</div>
		{{Form::submit('Save', ['class' => 'btn btn-success'])}}
	{{ Form::close() }}

	<div id="wmd-preview" class="wmd-panel wmd-preview"></div>
</div>
@stop

@section('bottomscript')
<script type="text/javascript">
	(function () {
	    var converter1 = Markdown.getSanitizingConverter();
	    var editor1 = new Markdown.Editor(converter1);
	    editor1.run();
	})();
</script>
@stop