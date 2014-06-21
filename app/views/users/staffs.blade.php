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
				{{ Form::open(['route'=>'staffs.show','class'=>'form-horizontal', 'rule'=>'form']) }}
					<div class="container-fluid table-bg">
					<table class="table table-hover">
						<thead>
							<tr>
								<th> <h4>Staff Name</h4></th>
								<th class="tbl-prop"><h4>Department</h4></th>
								<th class="tbl-prop"><h4>Contact Number</b></h4></th>
								<th class="tbl-prop"><h4>Email</h4></th>
								<th class="tbl-prop"><h4>Role</h4></th>
								<th class="tbl-prop"><h4>Transaction History</h4></th>
							</tr>
						</thead>
						<tbody>
							<tr class="success">
								<td class="tbl-prop">Admin</td>
								<td class="tbl-prop">Administration</td>
								<td class="tbl-prop">09234455675</td>
								<td class="tbl-prop">admin@radianceinn.com</td>
								<td class="tbl-prop">Administrator</td>
								<td class="tbl-prop">
									<center>
										<button type="button" class="btn btn-primary"><span>View</span></button>
									</center>
								</td>
							</tr>
						</tbody>
					</table>
					</div>
				{{ Form::close() }}
			</font><!-- default font color for body -->
			</div>
		</div>
	</div>
@stop