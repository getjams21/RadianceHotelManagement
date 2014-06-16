<?php

class PageController extends BaseController {

	public function index(){
		return View::make('forms.reservation', ['title'=>'Radiance Hotel']);
	}

	public function store(){
		return Redirect::back();
	}

	public function rooms(){
		return View::make('forms.rooms', ['title'=>'Radiance Hotel']);
	}

	public function houseKeeping(){
		return View::make('forms.housekeeping', ['title'=>'Radiance Hotel']);
	}
}