@extends('layouts.master')
@section('form')
		<div class="col-xs-12 col-sm-6 col-md-8">
			<div class="well formx">
				<div class="container-fluid">
		  			<div class="row">
	  					<center>
	  						<div class="breadcrumb form-title-bc">
	    						<font size="5">Reservation</font>
	    					</div>
	  					</center>
		  			</div>
		  			<div class="row">
  						<div class="well">
  							<div class="container-fluid">
  								<font color="#161515">
	  								{{ Form::open(['route'=>'page.store', 'class'=>'form-horizontal', 'rule'=>'form']) }}
											<div class="form-group">
											<h3> <span>Hotel Reservation Form</span> </h3>
											<hr>
											<div class="col-md-6">
												<div class="form-group">
													<label><h4>Full Name</h4></label>
													<br>
													<div class="form-inline">
														{{ Form::text('Firstname','',array('class'=>'span3 form-control textbox-control-m','placeholder'=>'First Name')) }}
														<br>
														{{ Form::text('Lastname','',array('class'=>'span3 form-control textbox-control-m','placeholder'=>'Last Name')) }}
													</div>
												</div>
												
												<div class="form-group">
													<label><h4>Address</h4></label>
													<br>
													{{ Form::text('Streetaddress','',array('class'=>'span3 form-control textbox-control-l','placeholder'=>'Street Address')) }}
													{{ Form::text('Streetaddress2','',array('class'=>'span3 form-control textbox-control-l','placeholder'=>'Street Address 2')) }}
													<div class="form-inline">
														{{ Form::text('City','',array('class'=>'span3 form-control','placeholder'=>'City')) }}
														{{ Form::text('Stateprovince','',array('class'=>'span3 form-control','placeholder'=>'State/Province')) }}
														{{ Form::text('Country','',array('class'=>'span3 form-control','placeholder'=>'Country')) }}
													</div>
												</div>
												<div class="form-group">
													<label><h4>Contact Number</h4></label>
													<br>
													{{ Form::text('ContactNo','',array('class'=>'span3 form-control textbox-control-l','placeholder'=>'Contact Number')) }}
												</div>
												<div class="form-group">
													<label><h4>Email</h4></label>
													{{ Form::text('Email','',array('class'=>'span3 form-control textbox-control-l','placeholder'=>'Email Address')) }}
													<hr class="hr-prop">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label><h4>Arrival Date</h4></label>
													<br>
									                <div class='input-group date'>
									                    {{ Form::text('ArrivalDate','',array('class'=>'span3 form-control','placeholder'=>'Date of Arrival', 'id'=>'datepicker')) }}
													</div>
												</div>
												<div class="form-group">
													<label><h4>Departure Date</h4></label>
													<br>
									                <div class='input-group'>
									                    {{ Form::text('DepartureDate','',array('class'=>'span3 form-control','placeholder'=>'Date of Departure', 'id'=>'datepicker2')) }}
													</div>
													<hr class="hr-prop">
												</div>
												<div class="form-group">
													<label><h4>Accomodation</h4></label>
									                <div class='input-group'>
									                	<div class="form-inline">
															{{ Form::text('Adults','',array('class'=>'span3 form-control textbox-control-m','placeholder'=>'Number of Adults')) }}
															<br>
															{{ Form::text('Kids','',array('class'=>'span3 form-control textbox-control-m','placeholder'=>'Number of Kids')) }}
															<br>
															{{ Form::text('Nights','',array('class'=>'span3 form-control textbox-control-m','placeholder'=>'Number of Nights')) }}
														</div>
													</div>
												</div>
												<div class='form-group'>
													<label><h4>Room Type</h4></label>
								                	<div class="form-inline">
														{{ Form::select('Room', [
														   'Economy' => 'Economy',
														   'Deluxe' => 'Deluxe',
														   'Premier' => 'Premier'],
														   '', ['class' => 'form-control']
														) }}
													</div>
													<br>
														<center>
															<label><p><h4>Total Rental Fee: <font color="#c94431"><b>Php 5,000.00</b></font></h4></p></label>
														</center>
													<hr class="hr-prop" style="margin-top:17px;">
												</div>			
										</div>
											<center>
												<div style="width:30%;" >
												{{ Form::Submit('Submit',['class'=>'btn btn-success btn-properties-res']) }}
												</div>
											</center>
										</div>	
									{{ Form::close() }}
								</font>
  							</div>
  						</div>
		  			</div>
		  		</div>
			</div>
		</div>
@stop