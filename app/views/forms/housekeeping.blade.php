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
				  <li><a href="#profile" data-toggle="tab">Assign</a></li>
				  <li><a href="#messages" data-toggle="tab">House keeping Details</a></li>
				</ul>
				<div id="housekeepingForm">
					<form method="post" action="">			
						<div class="form-group">
							<h3>House Keeping Assign</h3>
							<hr>
						    <label for="staff"> Assign Staff</label>
							<select name="staff" class="form-control" style="width:200px">
							 	<option>Staff1</option>
							    <option>Staff2</option>
							    <option>Staff3</option>
							</select>
						</div>

						<div class="form-group">
							<label for="rooms" style="display:block"> Assign Room</label>
							<input type="text" name="room" id="room">
						</div>
						
						<div class="form-group">
							<label for="task"> Task</label>
							<div>
								<span><input type="checkbox" id="chckall"> check all </span>
								<hr>						
							</div>
						</div>
						<div class="form-group">
							<ul class="nav nav-pills nav-stacked">
								<li><span><input type="checkbox" class="chckTask" value="Changing the bed linen"> Changing the bed linen </span></li>
								<li><span><input type="checkbox" class="chckTask" value="Making beds"> Making beds </span></li>
								<li><span><input type="checkbox" class="chckTask" value="Vacuuming floors"> Vacuuming floors </span></li>
								<li><span><input type="checkbox" class="chckTask" value="Treating stains or damage to polished wood"> Treating stains or damage to polished wood </span></li>
								<li><span><input type="checkbox" class="chckTask" value="replenishing stocks of guest supplies such as shampoo and soap"> replenishing stocks of guest supplies such as shampoo and soap </span></li>
								<li><span><input type="checkbox" class="chckTask" value="re-stocking drinks in the mini-bar"> re-stocking drinks in the mini-bar </span></li>
							</ul>						
						</div>
						<div class="form-group">
							<button type="submit" name="btnsubmit" id="btnsubmit" class="btn btn-success">Assign</button>
						</div>
					</form>					
				</div>				
			</div>
		</div>
	</div>
@stop