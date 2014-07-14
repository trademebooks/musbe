<?php

/*
 * Static pages routes
*/
Route::get('/', array(
	'as' => 'home',
	'uses' => 'PagesController@home'
));

Route::get('about', array(
	'as' => 'about',
	'uses' => 'PagesController@about'
));
/*
 * Unauthenticated
*/
Route::group(array('before' => 'guest'), function(){

	Route::get('login', array(
		'as' => 'login',
		'uses' => 'AuthenticationController@getLogin'
	));

	Route::get('register', array(
		'as' => 'register',
		'uses' => 'AuthenticationController@getRegister'
	));

	Route::group(array('before' => 'csrf'), function(){

		Route::post('login', array(
			'as' => 'login_post',
			'uses' => 'AuthenticationController@postLogin'
		));

		Route::post('register', array(
			'as' => 'register_post',
			'uses' => 'AuthenticationController@postRegister'
		));
	});

});

/*
 * Authenticated
*/
Route::group(array('before' => 'auth'), function(){

	Route::resource('posts', 'PostsController'/*, array('only' => 'create', 'show', 'index')*/);

	Route::get('logout', array(
		'as' => 'logout',
		'uses' => 'AuthenticationController@logout'
	));

});

/*
 * IOC bindings
*/
App::bind('Acme\Repositories\PostRepositoryInterface', 'Acme\Repositories\DbPostRepository');


Route::resource('profile', 'ProfilesController', ['only' => ['show', 'edit', 'create', 'update']]);
/*
 * Wildcards all last so you do not overwrite anything up top
 */


/*

class Foo{
	
	proteted $bar

	protected $baz

	oocontruct(Bar $bar, Baz $baz){
	
		this bar = bar
		this baz = baz
	}
}

class Bar{}

class Baz{}

class Mock{}

-IOC gives you a place to manage instantition process
so you do not have to do it over and over through the constrctuor

App::bind('foo', function(){
	return foo obeject //create a new instance of foo 
}); //can delete this and sitll works


App::make('foo'); -> call foo binded by the IOC

App::instance('foo', Mock()) ---> used for testing, using the Mock class instead



Controllers and automatic resolutions*******
*/
