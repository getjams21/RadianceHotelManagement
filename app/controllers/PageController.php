<?php

class PageController extends BaseController {

	public function index(){
		return View::make('forms.reservation', ['title'=>'Radiance Hotel']);
	}

	public function store(){
		return Redirect::back();
	}
}