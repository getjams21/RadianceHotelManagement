<?php

class PageController extends BaseController {

	public function index(){
		return View::make('forms.reservation.reservation', [
			'title'=>'Radiance Hotel',
			'subtitle'=>'Reservation',
			'icon'=>'icon-book'
			]);
	}
	public function search(){
		return Redirect::back();
	}
	public function store(){
		return Redirect::back();
	}

	public function houseKeeping(){
		return View::make('forms.housekeeping', [
			'title'=>'Radiance Hotel',
			'subtitle'=>'Housekeeping',
			'icon'=>'icon-lodging'
			]);
	}
	public function newReservation(){
		return View::make('forms.reservation.new-reservation', [
			'title'=>'Radiance Hotel',
			'subtitle'=>'Reservation',
			'icon'=>'icon-book'
			]);
	}
	public function guest(){
		return View::make('forms.guest.guest', [
			'title'=>'Radiance Hotel',
			'subtitle'=>'Guest',
			'icon'=>'icon-adult'
			]);
	}
}