<?php

class SidebarController extends BaseController {
	public function index(){
		return View::make('forms.sidebarMenus.hotel-info', [
			'title'=>'Radiance Hotel',
			'subtitle'=>'Settings',
			'icon'=>'icon-settings'
		]);
	}
	public function store(){
		return Redirect::back();
	}
}