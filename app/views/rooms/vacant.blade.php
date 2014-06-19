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
				{{ Form::open(['url'=>'/vacant', 'class'=>'form-horizontal', 'rule'=>'form']) }}
					Room Vacancies
				{{ Form::close() }}
			</font><!-- default font color for body -->
			</div>
		</div>
	</div>
@stop