@extends('layouts.master')
@section('header')
	@include('includes.header')
			<div class="fontello-small">
				<a href="/rooms">
					<div class="panel panel-prop" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Back">
						<div class="icn-prop">
							<center>
								<font color="#c94431">
									<span class="icon-fast-backward">
									</span>
								</font>
							</center>
						</div>
					</div>
				</a>
			</div>
	</div>
</div>
@stop

@section('form')
	<div class="row">
		<div class="well roomsContainer">
			<div class="container-fluid">
			
				<div class="panel panel-prop room room-vacant" data-container="body" data-toggle="popover" data-placement="bottom" data-content="">
					<div class="icn-prop">
						<center>
							<font color="#c94431">
								<span class="icon-key-1">
								</span>
							</font>
								<br>
									<div class="room-number">
										<span>{{ $roomno}}</span>
									</div>
						</center>
					</div>
				</div>
		<p><h4>Room No <b>5</b> Details</h4></p>

			<div class="row">
				<div class="well form-bg">
					<div class="container-fluid">
						<font color="#161515">
							<h4>Fill up for new room</h4>
						<font color="#161515"><hr>
			{{ Form::open(['route'=>'rooms.store', 'class'=>'form-horizontal', 'rule'=>'form']) }}
				
				<div class="col-md-6" style="width:40%;">
					<div class="form-group">
						<label><h4>Room Name</h4></label>
							<div class="form-inline" >
								{{ Form::text('Roomno','YourRoom',array('class'=>'span3 form-control textbox-control-m')) }}
					</div>
					</div>
					<div class="form-group">
						<label><h4>Room  Code</h4></label>
							<div class="form-inline" >
								{{ Form::text('RoomCode','roomno',array('class'=>'span3 form-control textbox-control-m')) }}
							</div>
					</div>
					<div class="form-group">
						<label><h4>Bed type</h4></label>
								{{ Form::select('bed type', ['Single', 'Double'], 1, ['class' => 'span3 form-control textbox-control-m']) }}
					</div>
					<div class="form-group">
								<label><h4>Room Type</h4></label>
								{{ Form::select('roomType', ['Economy', 'Deluxe', 'Premier'], 1, ['class' => 'span3 form-control textbox-control-m']) }}
					</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label><h4>Max Adult Number</h4></label>
									{{ Form::select('adult', [1, 2, 3,4], 1, ['class' => 'span3 form-control textbox-control-m']) }}
						</div>
						<div class="form-group">
							<label><h4>Max Child Number</h4></label>
									{{ Form::select('child', [1, 2, 3,4],0, ['class' => 'span3 form-control textbox-control-m']) }}
						</div>
						<div class="form-group">
							<label><h4>Max Infant Number</h4></label>
									{{ Form::select('infant', [1, 2, 3,4], 0, ['class' => 'span3 form-control textbox-control-m']) }}
						</div>
						<div class="form-group">
							<label><h4>Rate: <font color="#c94431"><b>Php 500.00</b></font></h4></label>
						</div>
								
					</div>
					<center>
						<div style="width:30%;" >
						{{ Form::Submit('Create Room',['class'=>'btn btn-success']) }}
						</div>
					</center>

								
					{{ Form::close() }}
						</font>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
