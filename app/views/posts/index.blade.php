@extends('layouts.master')


@section('content')

<h2>
	A Laravel Blog
</h2>
<div class="col-md-4">
	<div class="row">
		{{ HTML::image('/img/IMG_3662.png', 'jonathanEnergy', array('class' => 'img-circle', 'height' => '142')) }}
	</div>
	<div class="row">
		<h4> About</h4>
		<p>This is a Blog I built using Laravel, a PHP Framework, and designed using Twitter Bootstrap.  THe Post are here to give a little insight into programmer as they search or there next position. I recently jumped into programming and I am excited for the future.  To see a little outside my programming life </p>
	</div>
	<div class="row">
		<h4>Social</h4>
		<a href="mailto:jonbrobinson@gmail.com"><i class="fa fa-spin fa-envelope fa-3x"></i></a>
		<a href="http://www.facebook.com/jonbrobinson"><i class="fa fa-facebook fa-3x"></i></a>
		<a href="http://www.linkedin.com/pub/jonathan-robinson/13/36a/188"><i class="fa fa-linkedin fa-3x"></i></a>
		<a href="http://www.github.com/jonbrobinson"><i class="fa fa-spin fa-github fa-3x"></i></a>
	</div>
</div>
<div class="col-md-8">
	<div class="row"> <!------ Search Field ------>
		<hr>
		{{Form::open(array('action' => array('PostsController@index'), 'method' => 'GET'))}}
			{{ Form::text('search', null, array('placeholder' => 'Search Query')) }}
			{{ Form::submit('Search') }}
			@if(Auth::check())
			{{ link_to_action('PostsController@create', 'Create Post', null, array("class" => "btn btn-sm btn-success pull-right", "role" => "button")) }}
			@endif
		{{ Form::close() }}
	</div>
	<!------ Table to Display Blog Post ------>
	<div class="row">
		<table class="table table-striped">
			<tr>
				<th>
					Title
				</th>
				<th>
					User
				</th>
				<th>
					Creation Date
				</th>
				@if(Auth::check())
				<th>
					Action
				</th>
				@endif
			</tr>
			@foreach ($posts as $post)
			<tr>
				<td><a href="{{ action('PostsController@show', $post->id) }}">{{{ $post->title }}}</a></td>
				<td>{{{ $post->user->first_name }}} {{{ $post->user->last_name }}}</td>
				<td>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</td>
				@if(Auth::check())
				<td>
					<a href="{{ action('PostsController@edit', $post->id) }}" >Edit</a>
					<a href="#" class=" deletePost btn btn-default btn-sm" data-postid="{{ $post->id }}">Delete</a>
				</td>
				@endif
			</tr>
			@endforeach
		</table> <!-- End Table -->
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