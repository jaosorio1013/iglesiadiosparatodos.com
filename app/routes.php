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
	'as' => 'home',
	'uses' => 'PagesController@team'
]);


Route::get('contact', [
	'as' => 'home',
	'uses' => 'PagesController@contact'
]);


Route::get('about', [
	'as' => 'about',
	'uses' => 'PagesController@about'
]);