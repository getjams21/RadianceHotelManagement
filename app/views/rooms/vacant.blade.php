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
					
					<h3> <span>First Floor</span> </h3>
					<hr>
					<a href="/rooms/01">
					<div class="panel panel-prop room room-vacant">
						<div class="icn-prop">
							<center>
								<font color="#c94431">
									<span class="icon-key-1">
									</span>
								</font>
									<br>
								<div class="room-number">
									<span>RM-01</span>
								</div>
							</center>
						</div>
					</div>
					</a>
					<a href="/rooms/05">
					<div class="panel panel-prop room room-vacant">
						<div class="icn-prop">
							<center>
								<font color="#c94431">
									<span class="icon-key-1">
									</span>
								</font>
									<br>
								<div class="room-number">
									<span>RM-05</span>
								</div>
							</center>
						</div>
					</div>
					<a href="/rooms/07">
					<div class="panel panel-prop room room-vacant">
						<div class="icn-prop">
							<center>
								<font color="#c94431">
									<span class="icon-key-1">
									</span>
								</font>
									<br>
								<div class="room-number">
									<span>RM-07</span>
								</div>
							</center>
						</div>
					</div>
					</a>
					</a>
				{{ Form::close() }}
			</div>
			</font><!-- default font color for body -->
		</div>
	</div>
@stop