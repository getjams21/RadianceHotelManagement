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
				<div class="panel panel-prop room <?php if($roomno == 1){echo "room-vacant";} else if($roomno == 2){echo "room-occupied";}if($roomno == 3){echo "room-alert";}if($roomno == 4){echo "room-process";} ?>" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Room No {{ $roomno }}">
							<div class="icn-prop">
								<center>
									<font color="<?php if($roomno == 3 || $roomno == 4){echo "white";} else{echo "#c94431";}?>">
										<span class="icon-<?php if($roomno == 1){echo "key-1";} else if($roomno == 2){echo "lock-circled";} else if($roomno == 3){echo "trash-1";} else if($roomno == 4){echo "spin3";} ?>">
										</span>
									</font>
										<br>
									<div class="room-number">
										<span>{{ $roomno }}</span>
									</div>
							</center>
						</div>
					</div>
				<p><h4>Room No <b>{{ $roomno }}</b> Details</h4></p>
				<!-- form goes here -->

<div class="row">
	<div class="well form-bg">
		<div class="container-fluid">
			<font color="#161515">
				<div class="form-group"><h4> <span><?php if($roomno==2){echo "Current Guest: <b>Jaymar Cansancio </b>";}else if($roomno==1){echo "Status: <b>Vacant</b>";}else if($roomno==3){echo "Status: <b> Housekeeper alert</b>";}else if($roomno==4){echo "Status: <b>Cleaning...</b>";}?></span> </h4>

 		<?php if($roomno == 3){?>
						<p>{{ Form::label('housekeeper', 'choose a Housekeeper to change the Status: ') }}
							{{ Form::select('housekeeper', ['Marc Comia', 'Anna Yu','Marz Cansancio'], 1, ['class' => 'span3 form-control textbox-control-m']) }}</p>

							{{ Form::Button('Start',['class'=>'btn btn-success ']) }}
		<?php }else if($roomno == 4){?>
						<p>{{ Form::label('housekeeper', 'Click the done button to change the Status to Vacant: ') }}
							{{ Form::select('housekeeper', ['Marc Comia', 'Anna Yu','Marz Cansancio'], 1, ['class' => 'span3 form-control textbox-control-m','disabled']) }}</p>
							{{ Form::Button('Done',['class'=>'btn btn-success ']) }}
		<?php }?>
					<hr>
					<!-- FORM STARTS HERE -->
		{{ Form::open(['route'=>'page.store', 'class'=>'form-horizontal', 'rule'=>'form']) }}
					<div class="col-md-6">
				<div class="form-group">
					<label><h4>Room Name</h4></label>
						<div class="form-inline" >
							{{ Form::text('Roomno','YourRoom',array('class'=>'span3 form-control textbox-control-m','disabled')) }}
				</div>
				</div>
				<div class="form-group">
					<label><h4>Room  Code</h4></label>
						<div class="form-inline" >
							{{ Form::text('RoomCode','roomno',array('class'=>'span3 form-control textbox-control-m','disabled')) }}
						</div>
				</div>
				<div class="form-group">
					<label><h4>Bed type</h4></label>
							{{ Form::select('bed type', ['Single', 'Double'], 1, ['class' => 'span3 form-control textbox-control-m','disabled']) }}
						</div>
						<div class="form-group">
							<label><h4>Room Type</h4></label>
							{{ Form::select('roomType', ['Economy', 'Deluxe', 'Premier'], 1, ['class' => 'span3 form-control textbox-control-m','disabled']) }}
						</div>
	</div>
	<div class="col-md-6">
				<div class="form-group">
					<label><h4>Max Adult Number</h4></label>
							{{ Form::select('adult', [1, 2, 3,4], 1, ['class' => 'span3 form-control textbox-control-m','disabled']) }}
				</div>
				<div class="form-group">
					<label><h4>Max Child Number</h4></label>
							{{ Form::select('child', [1, 2, 3,4],0, ['class' => 'span3 form-control textbox-control-m','disabled']) }}
				</div>
				<div class="form-group">
					<label><h4>Max Infant Number</h4></label>
							{{ Form::select('infant', [1, 2, 3,4], 0, ['class' => 'span3 form-control textbox-control-m','disabled']) }}
				</div>
				<div class="form-group">
					<label><h4>Rate: <font color="#c94431"><b>Php 500.00</b></font></h4></label>
				</div>
								
	</div>
			</div>
		</div>
	</div>
</div>
		{{ Form::close() }}


		</font>
			<a href="/rooms">
				<div  class="panel panel-prop room room-alert back" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Back">
						<div class="icn-prop">
							<center>
								<font color="white" >
									<span class="icon-fast-backward">
									</span>
								
							</center>
						</div>
				</div>
			</a>
		</font>
		</div>
	</div>
</div>
@stop
