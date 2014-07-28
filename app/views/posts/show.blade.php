@extends('layouts.master')

@section('content')
<div class="col-md-8 col-md-offset-2">
	<h2>{{{$post->title}}}</h2>
	<h5>by: {{{ $post->user->first_name }}} {{{ $post->user->last_name }}}</h5>
	<p>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</p>
	@if($post->img_path)
		<img src="{{ $post->img_path }}" class="img-responsive">
	@endif
	<p>{{ $post->renderBody() }}</p>
	<div "row">
	@if(Auth::check())
		<a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-primary btn-sm" >Edit</a>
		<a href="#" class=" deletePost btn btn-danger btn-sm" data-postid="{{ $post->id }}">Delete</a>
	@endif
	</div>

	{{ Form::open(array("action" => "PostsController@destroy", 'id' => 'deleteForm', 'method' => 'delete')) }}
	{{ Form::close() }}
</div>
@stop

@section('bottomscript')
<script type="text/javascript">
   $(".deletePost").click(function() {
       var postId = $(this).data('postid');
       $("#deleteForm").attr('action', '/posts/' + postId);
       if(confirm("Are you sure you want to delete post")) {
           $('#deleteForm').submit();
       }
   });
</script>
@stop