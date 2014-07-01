@extends('layouts.master')


@section('content')
	<h3>{{{$post->title}}}</h3>
	<p>{{{$post->body}}}</p>
@stop