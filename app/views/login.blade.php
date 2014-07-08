@extends('layouts.master')


@section('content')
<div class="row">
	<h2>Login</h2>
	{{ Form::open(array('action' => array('HomeController@doLogin'), 'role'=> 'form')) 	}}
		{{ Form::label('email', 'E-Mail Address') }}
		{{ Form::text('email', null, array('placeholder' => 'Required', "class" => "form-control")) }}
		{{ Form::label('password', 'Password') }}
		{{ Form::password('password', array('placeholder' => 'Required', "class" => "form-control")) }}
		{{ Form::submit('Sign In') }}
	{{ Form::close() }}
</div>
@stop