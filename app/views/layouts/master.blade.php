<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		{{ HTML::style('_/css/bootstrap.css') }}
		{{ HTML::style('_/css/mystyle.css') }}
		{{ HTML::style('fontello/css/settings.css') }}
	</head>
	<body Background="_/fonts/images/dining.PNG" class="img-responsive" bgproperties="fixed">
		<font face="Segoe UI" color="White">
		<div class="container-fluid">
		  <div class="row">
		    <div class="col-xs-6 col-md-4">
		    	<center>
		    		<div class="well menu-well">
		    			<div class="container-fluid">
		    				<button type="button" class="btn btn-success btn-properties-res">Reservation</button>
		    			</div>
		    			<div class="container-fluid">
		    				<button type="button" class="btn btn-success btn-properties-res">Rooms</button>
		    			</div>
		    			<div class="container-fluid">
		    				<button type="button" class="btn btn-success btn-properties-res">Housekeeping</button>
		    			</div>
		    		</div>
		    	</center>
		    </div>
		    @yield('form')
		   <?php include(app_path().'/views/layouts/sidemenu.blade.php'); ?>
		  </div>
		</div>
		</font>
		{{ HTML::script('_/js/bootstrap.js') }}
		{{ HTML::script('_/js/myscript.js')}}
	</body>
</html>