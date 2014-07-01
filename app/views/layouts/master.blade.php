<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>{{{ $title or "" }}}</title>
    @yield('topscript')
</head>
<body id="{{{ $body_id or "" }}}"  class="{{{ $body_class or "" }}}">
    @yield('content')
    @yield('bottomscript')
</body>
</html>