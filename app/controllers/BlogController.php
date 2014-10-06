<?php

class BlogController extends BaseController
{

	public function index()
	{
		$data = [
			'title' => 'Blog',
			'active' => ['blog' => 'active'],
		];

		return View::make('blog/index', compact('data'));
	}


	public function detail($slug)
	{
		$data = [
			'title' => $slug,
			'active' => ['blog' => 'active'],
		];

		return View::make('blog/detail', compact('data'));
	}

}