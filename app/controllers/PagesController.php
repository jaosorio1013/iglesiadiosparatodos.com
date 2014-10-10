<?php

class PagesController extends BaseController
{

	public function home()
	{
		$data = [
			'title' => 'Inicio',
			'active' => ['home' => 'active'],
		];

		return View::make('home/index', compact('data'));
	}


	public function page404()
	{
		$data = [
			'title' => '404 Página no encontrada'
		];

		return View::make('pages/404', compact('data'));
	}


	public function contact()
	{
		$data = [
			'title' => 'Contacto',
			'active' => ['contact' => 'active'],
		];

		return View::make('pages/contact', compact('data'));
	}


	public function team()
	{
		$data = [
			'title' => 'Lideres',
			'active' => ['team' => 'active'],
		];

		$team = array();

		return View::make('pages/team', compact('data', 'team'));
	}


	public function about()
	{
		$data = [
			'title' => 'Nosotros',
			'active' => ['about' => 'active'],
		];

		return View::make('pages/about', compact('data'));
	}

}