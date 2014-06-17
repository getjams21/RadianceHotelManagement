<?php

class PageController extends BaseController {

	public function index(){
		return View::make('forms.reservation', [
			'title'=>'Radiance Hotel',
			'subtitle'=>'Reservation',
			'icon'=>'icon-book'
			]);
	}

	public function store(){
		return Redirect::back();
	}

	public function rooms(){
		return View::make('forms.rooms', [
			'title'=>'Radiance Hotel',
			'subtitle'=>'Rooms',
			'icon'=>'icon-login'
			]);
	}

	public function houseKeeping(){
		return View::make('forms.housekeeping', [
			'title'=>'Radiance Hotel',
			'subtitle'=>'Housekeeping',
			'icon'=>'icon-lodging'
			]);
	}
	public function newReservation(){
		return View::make('forms.new-reservation', [
			'title'=>'Radiance Hotel',
			'subtitle'=>'Reservation',
			'icon'=>'icon-book'
			]);
	}
}