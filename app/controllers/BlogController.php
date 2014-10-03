<?php

class BlogController extends BaseController
{

	public function index()
	{
		return View::make('blog/index');
	}


	public function detail($slug)
	{
		return View::make('blog/detail');
	}

}