<?php

/**
 * Static page routes
 */
Route::get('/', [
	'as' => 'home',
	'uses' => 'PagesController@home'
]);

Route::get('/about', [
	'as' => 'about',
	'uses' => 'PagesController@about'
]);

Route::get('/contact', [
	'as' => 'contact',
	'uses' => 'PagesController@contact'
]);

Route::get('/add-post', [
    'as' => 'add_post',
    'uses' => 'PagesController@addPost'
]);

/**
 * UnAuthenticated actions
 */
Route::group(['before' => 'guest'], function()
{
	Route::get('/login', array(
		'as' => 'login',
		'uses' => 'AuthenticationController@getLogin'
	));

	Route::get('/register', array(
		'as' => 'register',
		'uses' => 'AuthenticationController@getRegister'
	));

	Route::group(['before' => 'csrf'], function()
    {
		Route::post('/login', [
			'as' => 'login_post',
			'uses' => 'AuthenticationController@postLogin'
		]);

		Route::post('/register', [
			'as' => 'register_post',
			'uses' => 'AuthenticationController@postRegister'
		]);
	});
});

/**
 * Authenticated actions
 */
Route::group(['before' => 'auth'], function()
{
	Route::resource('/books', 'BooksController');

	Route::get('/logout', [
		'as' => 'logout',
		'uses' => 'AuthenticationController@logout'
	]);
});

/**
 * IOC Bindings
 */
App::bind('Acme\Repositories\BookRepositoryInterface', 'Acme\Repositories\DbBookRepository');

/**
 * Miscellaneous routes
 */
Route::resource('profile', 'ProfilesController', ['only' => ['show', 'edit', 'create', 'update']]);

Route::get('test', function()
{
	var_dump(Config::get('database.connections.mysql'));
});

