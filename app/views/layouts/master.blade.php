<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		{{ HTML::style('_/css/bootstrap.css') }}
		{{ HTML::style('_/css/mystyle.css') }}
	</head>
	<body Background="_/fonts/images/bed.jpg"  bgproperties="fixed">
			@yield('content')
		@section('')
		
		@stop
		{{ HTML::script('_/js/bootstrap.js') }}
		{{ HTML::script('_/js/myscript.js')}}
	</body>
</html>
<!doctype html>
<html>

