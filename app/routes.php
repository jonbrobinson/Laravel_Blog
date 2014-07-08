<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/login', 'HomeController@showLogin');
Route::post('/login', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@doLogout');

Route::resource('posts', 'PostsController');

Route::get('/resume','HomeController@resume_route');

Route::get('/portfolio','HomeController@portfolio_route');

Route::get('/sayhello/{name}', 'HomeController@sayhello');

Route::get('/', function(){
	return View::make('temp.my_first_view');
});

Route::get('/rolldice/{guess}', function($guess){
	$random = rand(1,6);
	$data = [
		'random' => $random,
		'guess' => $guess
	];
	return View::make('temp.roll_dice')->with($data);
});

