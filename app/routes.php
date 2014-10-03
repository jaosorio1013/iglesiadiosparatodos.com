<?php

Route::get('/', [
	'as' => 'home',
	'uses' => 'PagesController@home'
]);


Route::get('404', [
	'as' => '404',
	'uses' => 'PagesController@page404'
]);


Route::get('team', [
	'as' => 'team',
	'uses' => 'PagesController@team'
]);


Route::get('contact', [
	'as' => 'contact',
	'uses' => 'PagesController@contact'
]);


Route::get('about', [
	'as' => 'about',
	'uses' => 'PagesController@about'
]);