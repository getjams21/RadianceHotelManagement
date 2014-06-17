@extends('layouts.master')

@section('header')
	@include('includes.header')
				<div class="fontello-small">
					<div class="panel panel-prop" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Guest">
						<div class="icn-prop">
							<center>
							<font color="#c94431">
								<span class="icon-adult">
								</span>
							</font>
						</center>
						</div>
					</div>
				</div>
				<div class="fontello-small">
					<a href="/new-reservation">
						<div class="panel panel-prop" data-container="body" data-toggle="popover" data-placement="bottom" data-content="New Reservation">
							<div class="icn-prop">
								<center>
								<font color="#c94431">
									<span class="icon-plus">
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
		<div class="well form-bg">
			<div class="container-fluid">
				<font color="#161515">
					<table class="table-hover">
						<tr>
							<td> <h4>Guest Name</h4></td>
							<td class="tbl-prop"><h4>Guest Contact Number</b></h4></td>
							<td class="tbl-prop"><h4>Check In</h4></td>
							<td class="tbl-prop"><h4>Check Out</h4></td>
							<td class="tbl-prop"><h4>Adults</h4></td>
							<td class="tbl-prop"><h4>Kids</h4></td>
							<td class="tbl-prop"><h4>Discount</h4></td>
							<td class="tbl-prop"><h4>Total</h4></td>
							<td class="tbl-prop"><h4>Paid</h4></td>
							<td class="tbl-prop"><h4>Balance</h4></td>
							<td class="tbl-prop"><h4>Booking Time</h4></td>
							<td class="tbl-prop"><h4>User</h4></td>
						</tr>
					</table>
				</font>
			</div>
		</div>
	</div>
@stop