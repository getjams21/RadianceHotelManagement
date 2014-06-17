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

	public function houseKeeping(){
		return View::make('forms.housekeeping', [
			'title'=>'Radiance Hotel',
			'subtitle'=>'Housekeeping',
			'icon'=>'icon-lodging'
			]);
	}
}