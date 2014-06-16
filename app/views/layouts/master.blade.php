<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>{{ $title }}</title>
		{{ HTML::style('_/css/bootstrap.css') }}
		{{ HTML::style('_/css/mystyle.css') }}
		{{ HTML::style('fontello/css/settings.css') }}
	</head>

	<body Background="_/fonts/images/dining.PNG" class="img-responsive" bgproperties="fixed">
		<font face="Segoe UI" color="White">
		<div class="container-fluid">
		  <div class="row">
		    <?php include(app_path().'/views/layouts/main-menu.blade.php'); ?>
		    @yield('form')
		    @yield('rooms')	    
		   <?php include(app_path().'/views/layouts/sidemenu.blade.php'); ?>
		  </div>
		</div>
		</font>
		
		{{ HTML::script('_/js/bootstrap.js') }}
		{{ HTML::script('_/js/bootstrap-datepicker.js') }}
		{{ HTML::script('_/js/myscript.js')}}
	</body>
</html>


