@extends('layouts.master')
@section('header')
	@include('includes.header')
	</div>
@stop

@section('form-options')
	@include('includes.form-options')
@stop

@section('form')
	<div class="row">
		<div class="well form-bg">
			<div class="container-fluid">
			<font color="#161515">
				<h3><span>Hotel Information</span></h3>
				<hr>
				<div class="col-md-2"></div>
				<div class="col-md-8">
						{{ Form::open(['route'=>'settings.store', 'class'=>'form-horizontal', 'rule'=>'form']) }}
							<div class="form-group">
								<label><h4>Company Details</h4></label>
								<div class="well">
									{{ Form::text('Hotelname','',array('class'=>'span3 form-control textbox-control-m','placeholder'=>'Hotel Name')) }}
									<br>
									{{ Form::text('Hoteladdress','',array('class'=>'span3 form-control textbox-control-l','placeholder'=>'Address 1')) }}
									<br>
									{{ Form::text('Hoteladdress2','',array('class'=>'span3 form-control textbox-control-l','placeholder'=>'Address 2')) }}
									<br>
									{{ Form::text('Hotelphone','',array('class'=>'span3 form-control textbox-control-m','placeholder'=>'Phone/Contact No.')) }}
									<br>
									{{ Form::text('Hotelemail','',array('class'=>'span3 form-control textbox-control-m','placeholder'=>'Email')) }}
									<br>
									{{ Form::textarea('Hotelslogan','',array('class'=>'span3 form-control textbox-control-l','rows'=>'3','placeholder'=>'Slogan')) }}
									<center>
										<div style="width:30%;" >
										{{ Form::Submit('Save',['class'=>'btn btn-success btn-properties-res']) }}
										</div>
									</center>
								</div>								
							</div>
						{{ Form::close() }}
				</div>
				<div class="col-md-1"></div>
			</font><!-- default font color for body -->
			</div>
		</div>
	</div>
@stop