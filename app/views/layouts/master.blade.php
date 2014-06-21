<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>{{ $title }}</title>
		{{ HTML::style('_/css/bootstrap.css') }}
		{{ HTML::style('_/css/mystyle.css') }}
		{{ HTML::style('fontello/css/settings.css') }}
	</head>

	<body class="img-responsive" bgproperties="fixed" background="/_/fonts/images/dining.PNG">
		<font face="Segoe UI" color="White">
		@yield('header')
		<div class="container-fluid">
		  <div class="row">
		    <?php include(app_path().'/views/layouts/main-menu.blade.php'); ?>
		    <div class="col-xs-12 col-sm-6 col-md-9">
					<div class="well formx">
						<div class="container-fluid onload-slide ">
							@yield('form-options')
							@yield('form')
		    			</div>
		    	</div>
		    </div>
		    <?php include(app_path().'/views/layouts/sidemenu.blade.php'); ?>
		  </div>
		</div>
		</font>
	
	@include('includes.footer')
	</body>
</html>


