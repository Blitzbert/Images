<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::controllers
([
	'home' => 'HomeController',
	'auth' => 'Auth\AuthController',
	'validated/user' => 'UserController',
	'validated/photos' => 'PhotoController',
	'validated/albums' => 'AlbumController',

	'/' => 'WelcomeController',
]);

Route::get('auth/github', 'AccountController@redirectToProvider');

Route::get('auth/github/callback', 'AccountController@handleProviderCallback');

Route::get('github', 'AccountController@github_redirect');
Route::get('account/github', 'AccountController@github');


/** 'auth/github'   => 'AccountController',
'auth/github/callback' => 'AccountController',
'github' => 'AccountController',
'account/github' => 'AccountController',

 */