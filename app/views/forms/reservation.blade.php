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
  							{{ Form::open(['route'=>'page.store', 'class'=>'form-horizontal', 'rule'=>'form']) }}
								<div class="form-group">
								</div>
							{{ Form::close() }}
  						</div>
		  			</div>
		  		</div>
			</div>
		</div>
@stop