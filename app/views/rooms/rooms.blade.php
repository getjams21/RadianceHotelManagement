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
		<div class="well">
			<div class="container-fluid">
				<div id="rooms">
					<h4>rooms</h4>
				</div>
			</div>
		</div>
	</div>
@stop