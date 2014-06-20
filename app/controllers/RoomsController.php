<?php

class RoomsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('rooms.rooms', [
			'title'=>'Radiance Hotel',
			'subtitle'=>'Rooms',
			'icon'=>'icon-login'
			]);
	}
	public function vacant(){
		return View::make('rooms.vacant', [
			'title'=>'Radiance Hotel',
			'subtitle'=>'Room Search',
			'icon'=>'icon-search'
			]);
	}
	public function roomlist()
	{
		return View::make('rooms.roomlist', [
			'title'=>'Radiance Hotel',
			'subtitle'=>'Rooms',
			'icon'=>'icon-login'
			]);
	}
	
	public function save(){
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('rooms.create', [
			'roomno' => '05',
			'title'=>'Radiance Hotel',
			'subtitle'=>'Rooms',
			'icon'=>'icon-login'
			]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

public function vacant(){
		return View::make('rooms.vacant', [
			'title'=>'Radiance Hotel',
			'subtitle'=>'Room Search',
			'icon'=>'icon-search'
			]);
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('rooms.roomdetails', [
			'roomno' => $id,
			'title'=>'Radiance Hotel',
			'subtitle'=>'Rooms',
			'icon'=>'icon-login'
			]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
