@extends('layouts.master')


@section('content')

<div class="col-md-3">
	<div class="row">
		<h2>A Laravel Blog</h2>
		{{ HTML::image('/img/IMG_3662.png', 'jonathanEnergy', array('class' => 'img-circle', 'height' => '142')) }}
	</div>
	<div class="row">
		<h4> About</h4>
		<p>This is a Blog I built using Laravel, a PHP Framework, and designed using Twitter Bootstrap.  THe Post are here to give a little insight into programmer as they search or there next position. I recently jumped into programming and I am excited for the future.  To see a little outside my programming life </p>
	</div>
	<div class="row">
		<h4>Let's Connect</h4>
		<ol class='breadcrumb'>
			<li><a href="http://www.linkedin.com/pub/jonathan-robinson/13/36a/188"><i class="fa fa-linkedin fa-2x"></i></a></li>
			<li><a href="mailto:jonbrobinson@gmail.com"><i class="fa fa-envelope fa-2x"></i></a></li>
			<li><a href="http://www.github.com/jonbrobinson"><i class="fa fa-github fa-2x"></i></a></li>
			<li><a href="http://www.facebook.com/jonbrobinson"><i class="fa fa-facebook fa-2x"></i></a><br></li>
			<li><a href="http://www.instagram.com/jonbrobinson"><i class="fa fa-instagram fa-2x"></i></a><br></li>
		</ol>

		<br>

	</div>
	<div class="row well"> <!------ Search Field ------>
		{{Form::open(array('action' => array('PostsController@index'), 'method' => 'GET'))}}
			{{ Form::label('search', 'Blog Search') }} <br>
			{{ Form::text('search', null, array('placeholder' => 'Search Blog')) }}
			{{ Form::submit('Search') }}
		{{ Form::close() }}
	</div>
</div>
<div class="col-md-6 col-md-offset-1">
	<!------ Blog Post ------>
	<div class="row">
		@foreach ($posts as $post)
			<p><a href="{{ action('PostsController@show', $post->id) }}"><h1>{{{ $post->title }}}</h1></a></p>
			<p>By: {{{ $post->user->first_name }}} {{{ $post->user->last_name }}}</p>
			<p><i class="fa fa-clock-o"></i> <strong>Posted on {{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</strong></p>
			@if($post->img_path)
				<img src="{{ $post->img_path }}" class="">
			@endif
			<p>{{ (str_limit($post->renderBody(), $limit = 300, $end = '...')) }}</p>
			<a href="{{ action('PostsController@show', $post->id) }}" class=" btn  btn-primary">Read More</a>
			<hr>
		@endforeach
	</div>

	{{ $posts->appends(array('search' => Input::get('search')))->links() }}
	<hr>

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