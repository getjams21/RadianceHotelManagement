@extends('layouts.master')
@section('header')
	@include('includes.header')
	</div>
</div>
@stop
@section('form-options')
	@include('includes.form-options')
@stop
@section('form')
	<div class="row">
		<div class="well roomsContainer">
			<div class="container-fluid">
				<!-- Room 01 -->
				<a href="/rooms/01">
					<div class="panel panel-prop room room-vacant" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vacant">
						<div class="icn-prop">
							<center>
								<font color="#c94431">
									<span class="icon-key-1">
									</span>
								</font>
									<br>
								<div class="room-number">
									<span>01</span>
								</div>
							</center>
						</div>
					</div>
				</a>
				<!-- room 02 -->
				<a href="/rooms/02">
					<div class="panel panel-prop room room-occupied" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Occupied">
						<div class="icn-prop">
							<center>
								<font color="#c94431">
									<span class="icon-lock-circled">
									</span>
								</font>
									<br>
								<div class="room-number">
									<span>02</span>
								</div>
							</center>
						</div>
					</div>
				</a>
				<!-- room 3 -->
				<a href="/rooms/03">
					<div class="panel panel-prop room room-alert" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Checkout">
						<div class="icn-prop">
							<center>
								<font color="white">
									<span class="icon-trash-1">
									</span>
								</font>
									<br>
								<div class="room-number">
									<span>03</span>
								</div>
							</center>
						</div>
					</div>
				</a>
				<!-- room 4 -->
				<a href="/rooms/04">
					<div class="panel panel-prop room room-process" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Housekeeping">
						<div class="icn-prop">
							<center>
								<font color="white">
									<span class="icon-spin3">
									</span>
								</font>
									<br>
								<div class="room-number">
									<span>04</span>
								</div>
							</center>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
@stop
