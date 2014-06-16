@extends('layouts.master')
@section('header')
	<div class="well-nav breadcrumb">
		<div class="col-md-4">
			<div class="row">
				<div class="container-fluid">
					<span class="{{ $icon }} fontello-large">
						{{ $subtitle }}
					</span>
				</div>
			</div>
		</div>
	</div>
@stop
@section('form')
	<div class="row">
			<center>
				<div class="breadcrumb form-title-bc">
					<font size="5">House Keeping</font>
				</div>
			</center>
	</div>
	<div class="row">
		<div class="well">
			<div  class="container-fluid">
				<div id="housekeepingForm">				
					<div class="form-group">
						<h3>House Keeping Form</h3>
						<hr>
					    <label for="staff"> Assign Staff</label>
						<select name="staff" class="form-control">
						 	<option>Staff1</option>
						    <option>Staff2</option>
						    <option>Staff3</option>
						</select>
					</div>
					<div class="form-group">
						<label for="task"> Task</label>
						<div>
							<span><input type="checkbox"> check all </span>
							<hr>						
						</div>
					</div>
					<div class="form-group">
						<ul class="nav nav-pills nav-stacked">
							<li><span><input type="checkbox"> Changing the bed linen </span></li>
							<li><span><input type="checkbox"> Making beds </span></li>
							<li><span><input type="checkbox"> Vacuuming floors </span></li>
							<li><span><input type="checkbox"> Treating stains or damage to polished wood </span></li>
							<li><span><input type="checkbox"> replenishing stocks of guest supplies such as shampoo and soap </span></li>
							<li><span><input type="checkbox"> re-stocking drinks in the mini-bar </span></li>
						</ul>						
					</div>					
				</div>				
			</div>
		</div>
	</div>
@stop