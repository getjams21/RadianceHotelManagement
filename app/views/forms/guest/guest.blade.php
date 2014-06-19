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
			<div class="container-fluid table-bg">
				<font color="#161515">
					<table class="table table-hover">
						<thead>
							<tr>
								<th> <h4>Guest Name</h4></th>
								<th class="tbl-prop"><h4>Contact Number</b></h4></th>
								<th class="tbl-prop"><h4>Address</h4></th>
								<th class="tbl-prop"><h4>Email</h4></th>
								<th class="tbl-prop"><h4>Last Check In</h4></th>						
								<th class="tbl-prop"><h4>Balance</h4></th>
								<th class="tbl-prop"><h4>Booking History</h4></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="tbl-prop">Jay Marz</td>
								<td class="tbl-prop">09261458758</td>
								<td class="tbl-prop">Bonifacio St., Davao City</td>
								<td class="tbl-prop">jmarz@email.com</td>
								<td class="tbl-prop">June 21, 2014</td>
								<td class="tbl-prop">0</td>
								<td class="tbl-prop">
									<button type="button" class="btn btn-primary"><span>View</span></button>
								</td>
							</tr>
							<tr>
								<td class="tbl-prop">Marc Comia</td>
								<td class="tbl-prop">09261458758</td>
								<td class="tbl-prop">Lanang, Davao City</td>
								<td class="tbl-prop">comiamc@email.com</td>
								<td class="tbl-prop">June 24, 2014</td>
								<td class="tbl-prop">0</td>
								<td class="tbl-prop">
									<button type="button" class="btn btn-primary"><span>View</span></button>
								</td>
							</tr>
							<tr>
								<td class="tbl-prop">Yeltsin Batiancila</td>
								<td class="tbl-prop">09261458758</td>
								<td class="tbl-prop">Sasa, Davao City</td>
								<td class="tbl-prop">tsin@email.com</td>
								<td class="tbl-prop">June 23, 2014</td>
								<td class="tbl-prop">0</td>
								<td class="tbl-prop">
									<button type="button" class="btn btn-primary"><span>View</span></button>
								</td>
							</tr>
						</tbody>
					</table>
				</font>
			</div>
		</div>
      </div>
@stop