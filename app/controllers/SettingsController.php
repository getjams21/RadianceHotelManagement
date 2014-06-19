<?php

class SettingsController extends BaseController {
	public function index(){
		return View::make('forms.settings.hotel-info', [
			'title'=>'Radiance Hotel',
			'subtitle'=>'Settings',
			'icon'=>'icon-settings'
		]);
	}
	public function store(){
		return Redirect::back();
	}
}