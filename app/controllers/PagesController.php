<?php

class PagesController extends BaseController
{

	public function home()
	{
		return View::make('pages/home');
	}


	public function page404()
	{
		return View::make('pages/404');
	}


	public function contact()
	{
		return View::make('pages/contact');
	}


	public function team()
	{
		return View::make('pages/team');
	}


	public function about()
	{
		return View::make('pages/about');
	}

}