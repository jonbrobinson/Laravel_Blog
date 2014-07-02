<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>{{{ $title or "" }}}</title>
    @yield('topscript')
</head>
<body id="{{{ $body_id or "" }}}"  class="{{{ $body_class or "" }}}">
	@if (Session::has('successMessage'))
		<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif
	@if (Session::has('errorMessage'))
		<div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif
    @yield('content')
    @yield('bottomscript')
</body>
</html>