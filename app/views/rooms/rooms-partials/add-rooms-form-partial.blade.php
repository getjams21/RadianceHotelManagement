	<div class="col-md-6">
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
					<!-- <center>
						<div style="width:30%;" >
						{{ Form::Submit('Submit',['class'=>'btn btn-success btn-properties-res']) }}
						</div>
					</center> -->

			