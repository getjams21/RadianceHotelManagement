@extends('layouts.master')
@section('header')
	<div class="well-nav breadcrumb">
		<div class="col-md-4">
			<div class="row">
				<div class="container-fluid">
					<span class="icon-book fontello-large">
						{{ $subtitle }}
					</span>
				</div>
			</div>
		</div>
	</div>
@stop

@section('form-options')
	@include('includes.form-options')
@stop

@section('form')
	<div class="row">
		<font color="#161515">
			<div class="well">
				<h4>Form Body Here</h4>
			</div>
		</font><!-- default font color for body -->
	</div><!-- row of form body -->
@stop