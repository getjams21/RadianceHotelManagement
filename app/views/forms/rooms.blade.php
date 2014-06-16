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
					<font size="5">Rooms</font>
				</div>
			</center>
	</div>
	<div class="row">
		<div class="well">
			<h4>Rooms</h4>
		</div>
	</div>
@stop