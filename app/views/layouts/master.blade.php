<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="/pagedown/demo/browser/demo.css" />

    <title>{{{ $title or "Laravel Blog" }}}</title>
    @yield('topscript')
</head>


<body id="{{{ $body_id or "" }}}"  class="{{{ $body_class or "" }}}">

	<div class="container">

		<!------ NavBar ------>

		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ action('PostsController@index') }}">Href=MyDevLife</a>
			    </div>
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="{{ action('PostsController@index') }}">Home</a></li>
						<li><a href="#">Portfolio</a></li>
						<li><a href="#">Resume</a></li>
					</ul>
				@if(Auth::check())
					<div class="pull-right"><p class="navbar-text">Welcome {{ Auth::user()->first_name }}{{ link_to_action('HomeController@doLogout', 'Logout', null, array("class" => "btn btn-xs pull-right", "role" => "button")) }}</p></div>
				@else
					<div class="pull-right">
					<p class="navbar-text">{{ link_to_action('HomeController@showLogin', 'Sign In', null, array("class" => "btn btn-xs pull-right", "role" => "button")) }}</p>
					</div>
				@endif
				</div>
			</div>
		</nav>

		<!------ Alert Messages ------>

		@if (Session::has('successMessage'))
			<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
		@endif
		@if (Session::has('errorMessage'))
			<div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
		@endif


	    @yield('content')
	</div>

	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="/pagedown/Markdown.Converter.js"></script>
	<script type="text/javascript" src="/pagedown/Markdown.Sanitizer.js"></script>
	<script type="text/javascript" src="/pagedown/Markdown.Editor.js"></script>
    @yield('bottomscript')
</body>
</html>