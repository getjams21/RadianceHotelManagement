@extends('layouts.master')
@section('header')
	@include('includes.header')
				<div class="fontello-small">
					<a href="/rooms">
						<div class="panel panel-prop" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Back">
							<div class="icn-prop">
								<center>
								<font color="#c94431">
									<span class="icon-fast-backward">
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
			<h4 class="formtxt">Room Detailed List</h4>
			<div class="container-fluid table-bg" style="padding-top: 15px;">
				<font color="#161515">
					<table class="table table-hover table-bordered">
						<thead>
							<tr>
								<center>	
								<th> <h4>Room Number</h4></th>
								<th class="tbl-prop" ><h4>Room Name</b></h4></th>
								<th class="tbl-prop"><h4>Room Code</h4></th>
								<th class="tbl-prop"><h4>Bed Type</h4></th>
								<th class="tbl-prop"><h4>Room Type</h4></th>
								<th class="tbl-prop"><h4>Rate</h4></th>
								<th class="tbl-prop"><h4>Max Adult No.</h4></th>
								<th class="tbl-prop"><h4>Max Child No.</h4></th>
								<th class="tbl-prop"><h4>Max Infant No.</h4></th>
								<th class="tbl-prop"><h4>Guest</h4></th>
								<th class="tbl-prop"><h4>Housekeeper</h4></th>
								</center>
							</tr>
						</thead>
						<tbody>
							<tr class="success">
								<td class="tbl-prop"><a href="/rooms/01">01</td>
								<td class="tbl-prop">YourRoom01</td>
								<td class="tbl-prop">Rm01</td>
								<td class="tbl-prop">Single</td>
								<td class="tbl-prop">Economy</td>
								<td class="tbl-prop">400</td>
								<td class="tbl-prop">2</td>
								<td class="tbl-prop">1</td>
								<td class="tbl-prop">1</td>
								<td class="tbl-prop">N/A</td>
								<td class="tbl-prop">N/A</a></td>
							</tr>
							<tr class="info">
								<td class="tbl-prop"><a href="/rooms/02">02</a></td>
								<td class="tbl-prop">YourRoom02</td>
								<td class="tbl-prop">Rm02</td>
								<td class="tbl-prop">Double</td>
								<td class="tbl-prop">Deluxe</td>
								<td class="tbl-prop">600</td>
								<td class="tbl-prop">2</td>
								<td class="tbl-prop">2</td>
								<td class="tbl-prop">1</td>
								<td class="tbl-prop">Jaymar Cansancio</td>
								<td class="tbl-prop">N/A</td>
							</tr>
							<tr class="danger">
								<td class="tbl-prop"><a href="/rooms/03">03</a></td>
								<td class="tbl-prop">YourRoom03</td>
								<td class="tbl-prop">Rm03</td>
								<td class="tbl-prop">Double</td>
								<td class="tbl-prop">Deluxe</td>
								<td class="tbl-prop">600</td>
								<td class="tbl-prop">2</td>
								<td class="tbl-prop">2</td>
								<td class="tbl-prop">1</td>
								<td class="tbl-prop">N/A</td>
								<td class="tbl-prop">N/A</td>
							</tr>
							<tr class="warning">
								<td class="tbl-prop"><a href="/rooms/04">04</a></td>
								<td class="tbl-prop">YourRoom04</td>
								<td class="tbl-prop">Rm04</td>
								<td class="tbl-prop">Double</td>
								<td class="tbl-prop">Premier</td>
								<td class="tbl-prop">800</td>
								<td class="tbl-prop">2</td>
								<td class="tbl-prop">2</td>
								<td class="tbl-prop">2</td>
								<td class="tbl-prop">N/A</td>
								<td class="tbl-prop">Anna Yu</td>
							</tr>
						</tbody>
					</table>
				</font>
			</div>
		</div>
	</div>
@stop
