<?php

App::bind('Acme\Repositories\PostRepositoryInterface', 'Acme\Repositories\DbPostRepository');

Route::get('/', function()
{
	return View::make('index');
});

Route::get('test', function(){

	return 'hi';
});

Route::resource('posts', 'PostsController');
Route::resource('authentication', 'AuthenticationsController');



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
