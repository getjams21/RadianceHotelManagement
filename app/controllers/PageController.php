<?php

class PageController extends BaseController {

	public function index(){
		return View::make('forms.reservation');
	}

	public function store(){
		return Redirect::back();
	}
}