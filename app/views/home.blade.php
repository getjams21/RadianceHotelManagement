<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		{{ HTML::style('_/css/bootstrap.css') }}
		{{ HTML::style('_/css/mystyle.css') }}
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div style='background-color: #090808; width:100%; height:60px '>
					<div style="position:absolute; z-index:1; padding-left:50px">
						<img src="_/fonts/images/logo.png" style="max-width:200px; max-hieght:80px">
					</div>				
						<ol class="breadcrumb pull-right" style='background-color: #090808; border-radius:0px; padding-right:50px'>
						  <li><a href="#">My Account</a></li>
						  <li><a href="#">My Wishlist</a></li>
						  <li><a href="#">My Cart</a></li>
						</ol>
				</div>			
			</div>
			<div class="row" style="border-style:solid ;border-color:grey #0 #0 #0">
				<div style='background-color: #090808; border-radius:0px;'>
					<ul class="nav nav-pills">
					  <li class="active"><a href="#">Home</a></li>
					  <li><a href="#">Profile</a></li>
					  <li><a href="#">Messages</a></li>
					</ul>
				</div>
			</div>
			<div style="width:100%; height:auto">
				<img src="_/fonts/images/bed.jpg" style="width:100%">
			</div>
		</div>
		


		{{ HTML::script('_/js/bootstrap.js') }}
		{{ HTML::script('_/js/myscript.js')}}
	</body>
</html>