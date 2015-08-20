<?php

/**
	* The Home Page
**/
Route::get('/', 'PagesController@home');
get('team', 'PagesController@team');
get('currentopenings', 'PagesController@jobs');//for legacy url
get('current-openings', 'PagesController@jobs');

get('contact', 'ContactController@index');

get('blog/{year}/{month}/{day}/{slug}', 'PostsController@showPost');
Route::get('blog/create/confirm', 'PostsController@confirm');
Route::resource('blog', 'PostsController');

/**
	* Authentication
**/
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
