@extends('layouts.master')

@section('header')
	@include('includes.header')
				<div class="fontello-small">
					<a href="/guest"><div class="panel panel-prop" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Guest">
						<div class="icn-prop">
							<center>
							<font color="#c94431">
								<span class="icon-adult">
								</span>
							</font>
						</center>
						</div>
					</div></a>
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

@section('form-options')
	@include('includes.form-options')
@stop

@section('form')
	<div class="row">
		<div class="well form-bg">
			<font color="#161515">
			<div class="row container-fluid">
				<span> <h4>Search for Reservations</h4> </span>
				<hr>
				<div class="col-md-12">
					{{ Form::open(['url'=>'reservation-search','class'=>'form-horizontal','rule'=>'form']) }}
					<div class="form-group">
						<span><h4>Booking Time</h4></span>
						<div class="btn-group form-inline">
							<span> <h5>Search Method</h5> </span>
							<button type="button" class="btn btn-default btn-selection active">Selection</button>
							<button type="button" class="btn btn-default btn-custom">Custom</button>
						</div>
						<div class="form-inline">
							<br>
							{{ Form::select('Booking', [
							   'Today' => 'Today',
							   'Yesterday' => 'Yesterday',
							   'Thisweek' => 'This Week',
							   'Lastweek' => 'Last Week',
							   'Thismonth' => 'This Month',
							   'Lastmonth' => 'Last Month',
							   'Thisyear' => 'This Year'],
							   '', ['class' => 'form-control slct-prop']
							) }}
							<div class='input-group date'>
			                    {{ Form::text('FromDate','',array('class'=>'span3 form-control','placeholder'=>'From', 'id'=>'dpFrom')) }}
							</div>
							<div class='input-group date'>
							 {{ Form::text('ToDate','',array('class'=>'span3 form-control','placeholder'=>'To', 'id'=>'dpTo')) }}
							</div>
							{{ Form::Submit('Search',['class'=>'icon-search btn btn-success']) }}
						</div>
					</div>
					{{ Form::close() }}
				</div>
			</div>
			<hr>
			<div class="container-fluid table-bg">
					<table class="table table-hover">
						<thead>
							<tr>
								<th> <h4>Guest Name</h4></th>
								<th class="tbl-prop"><h4>Contact Number</b></h4></th>
								<th class="tbl-prop"><h4>Check In</h4></th>
								<th class="tbl-prop"><h4>Check Out</h4></th>
								<th class="tbl-prop"><h4>Adults</h4></th>
								<th class="tbl-prop"><h4>Kids</h4></th>
								<th class="tbl-prop"><h4>Discount</h4></th>
								<th class="tbl-prop"><h4>Total</h4></th>
								<th class="tbl-prop"><h4>Paid</h4></th>
								<th class="tbl-prop"><h4>Balance</h4></th>
								<th class="tbl-prop"><h4>Booking Date</h4></th>
								<th class="tbl-prop"><h4>User</h4></th>
							</tr>
						</thead>
						<tbody>
							<tr class="success">
								<td class="tbl-prop">Jay Marz</td>
								<td class="tbl-prop">09261458758</td>
								<td class="tbl-prop">June 20, 2014</td>
								<td class="tbl-prop">June 21, 2014</td>
								<td class="tbl-prop">1</td>
								<td class="tbl-prop">0</td>
								<td class="tbl-prop">0%</td>
								<td class="tbl-prop">1,200.00</td>
								<td class="tbl-prop">1,200.00</td>
								<td class="tbl-prop">0.00</td>
								<td class="tbl-prop">June 17, 2014</td>
								<td class="tbl-prop">Staff</td>
							</tr>
							<tr class="warning">
								<td class="tbl-prop">Marc Comia</td>
								<td class="tbl-prop">09261457845</td>
								<td class="tbl-prop">June 23, 2014</td>
								<td class="tbl-prop">June 24, 2014</td>
								<td class="tbl-prop">2</td>
								<td class="tbl-prop">0</td>
								<td class="tbl-prop">5%</td>
								<td class="tbl-prop">2,200.00</td>
								<td class="tbl-prop">1,000.00</td>
								<td class="tbl-prop">1.200.00</td>
								<td class="tbl-prop">June 15, 2014</td>
								<td class="tbl-prop">Admin</td>
							</tr>
							<tr class="danger">
								<td class="tbl-prop">Tsin Batiancila</td>
								<td class="tbl-prop">09081457845</td>
								<td class="tbl-prop">June 23, 2014</td>
								<td class="tbl-prop">June 24, 2014</td>
								<td class="tbl-prop">2</td>
								<td class="tbl-prop">1</td>
								<td class="tbl-prop">5%</td>
								<td class="tbl-prop">2,700.00</td>
								<td class="tbl-prop">0.00</td>
								<td class="tbl-prop">2.700.00</td>
								<td class="tbl-prop">June 15, 2014</td>
								<td class="tbl-prop">Admin</td>
							</tr>
						</tbody>
					</table>
				</font>
			</div>
		</div>
      </div>
@stop