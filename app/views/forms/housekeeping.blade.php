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
		<div class="well form-bg">
			<div  class="container-fluid">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#assign" data-toggle="tab">Assign</a></li>
					<li><a href="#hkdetails" data-toggle="tab">House keeping Details</a></li>
				</ul>
				<div class="tab-content">
					  	<div class="tab-pane active" id="assign">
					  		<div id="housekeepingForm">
								{{ Form::open() }}						
									<div class="form-group">
										<h3>House Keeping Assign</h3>
										<hr>
										{{ form::label('staff', 'Assign Staff') }}
										
										{{ form::select('staff', array('staff1'=>'staff1',
																	   'staff2'=>'staff2',
																	   'staff3'=> 'staff3'),
																  		null,
															 			array('class'=>'form-control',
															 				  'style'=>'width:200px' ))
										 }}							
									</div>

									<div class="form-group">
										{{ form::label('room', 'Assign Room') }}
										<br>
										{{ Form::text('room','',array('id'=>'room',
																	  'name'=>'room',
																	  'placeholder'=>'Room to assign'))
										}}							
									</div>						
									<div class="form-group">
										{{ form::label('task', 'Task') }}
										<div>
											{{ Form::checkbox('chckall', 'Check all', false, array('id'=>'chckall')) }}
												{{ Form::label('chckall', 'Check all') }}
											<hr>						
										</div>
									</div>
									<div class="form-group">
										<ul class="nav nav-pills nav-stacked">
											<li>{{ form::checkbox('chcktask','Changing the bed linen', false ,array('class'=>'chckTask')) }} Changing the bed linen</li>
											<li>{{ form::checkbox('chcktask','Making beds', false ,array('class'=>'chckTask')) }} Making beds</li>
											<li>{{ form::checkbox('chcktask','Vacuuming floors', false ,array('class'=>'chckTask')) }} Vacuuming floors</li>
											<li>{{ form::checkbox('chcktask','Treating stains or damage to polished wood', false ,array('class'=>'chckTask')) }} Treating stains or damage to polished wood</li>
											<li>{{ form::checkbox('chcktask','replenishing stocks of guest supplies such as shampoo and soap', false ,array('class'=>'chckTask')) }} replenishing stocks of guest supplies such as shampoo and soap</li>
											<li>{{ form::checkbox('chcktask','re-stocking drinks in the mini-bar', false ,array('class'=>'chckTask')) }} re-stocking drinks in the mini-bar</li>
										</ul>						
									</div>
									<div class="form-group">
										<button type="submit" name="btnsubmit" id="btnsubmit" class="btn btn-success">Assign</button>
									</div>
								{{ Form::close() }}					
							</div>
					 	</div>  <!-- tabpane assign-->

						<div class="tab-pane" id="hkdetails">
							<!-- should be loop the result -->
							<font color="#161515">
						 	<table class="table table-hover">								
								 	<tr class="info">
								 		<th>Status</th>
								 		<th>Room</th>
								 		<th>Category</th>
								 		<th>Arrival</th>
								 		<th>Departure</th>
								 		<th>Person</th>
								 		<th>Name</th>
								 		<th>Note</th>
								 	</tr>
								 	<tr class="success">
								 		<td>Occupied</td>
								 		<td>101</td>
								 		<td>Delux Room</td>
								 		<td>06/19/14</td>
								 		<td>06/25/14</td>
								 		<td>1</td>
								 		<td>Marc Comia</td>
								 		<td> -- </td>	
								 	</tr>
								 	<tr class="danger">
								 		<td>Out of Order</td>
								 		<td>102</td>
								 		<td>Superior Room1</td>
								 		<td> -- </td>
								 		<td> -- </td>
								 		<td> -- </td>
								 		<td> -- </td>
								 		<td> Renovation </td>	
								 	</tr>
								 	<tr class="success">
								 		<td>Occupied</td>
								 		<td>105</td>
								 		<td>Superior Room2</td>
								 		<td> 06/20/14 </td>
								 		<td> 06/23/14 </td>
								 		<td> 1 </td>
								 		<td> Tsin Batiancila  </td>
								 		<td> </td>	
								 	</tr>
								 	<tr class="success">
								 		<td>Occupied</td>
								 		<td>104</td>
								 		<td>Delux Room2</td>
								 		<td> 06/26/14 </td>
								 		<td> 06/29/14 </td>
								 		<td> 1 </td>
								 		<td> Jay Mars  </td>
								 		<td> </td>	
								 	</tr>									
							</table>
							</font>
						</div> <!-- tab hkdetails -->
				</div> <!-- tabcontent -->								
			</div>
		</div>
	</div>
@stop