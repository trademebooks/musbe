<?php

use Acme\Forms\RegistrationForm;
use Acme\Forms\LoginForm;

class AuthenticationController extends \BaseController {

	public function __construct(RegistrationForm $registrationForm, LoginForm $loginForm)
	{
		$this->registrationForm = $registrationForm;
		$this->loginForm = $loginForm;
	}
	/**
	 * Show the form for loging a user in
	 *
	 * @return Response
	 */
	public function getLogin()
	{
		return View::make('authentication.login');
	}

	/**
	 * logs the user in
	 *
	 * @return Response
	 */
	public function postLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		$credentials = array(
		    'email'    => $email,
		    'password' => $password
		);

		//$this->loginForm->validate($credentials);

       	$user = Sentry::authenticate($credentials, false);
        if ($user)
        {
        	return Redirect::route('posts.index');
        }
			
		//return Redirect::intended('/test');

		//dd($credentials);
		//return 'logn doesnt work';
		//return Redirect::back()->withInput()-withFlashMessage('invalid credentials');
	}

	/**
	 * Show the form for registering a new user
	 *
	 * @return Response
	 */
	public function getRegister()
	{
		return View::make('authentication.register');
	}

	/**
	 * Registers the new user
	 *
	 * @return Response
	 */
	public function postRegister()
	{

		$username = Input::get('username');
		$email = Input::get('email');
		$password = Input::get('password');
		$password_again = Input::get('password_again');

		$validate= array(
			'username' => $username,
		    'email'    => $email,
		    'password' => $password,
		    'password_again' => $password_again,
		    'activated' => true
		);

		$credentials = array(
			'username' => $username,
		    'email'    => $email,
		    'password' => $password,
		    'activated' => true
		);

		$this->registrationForm->validate($validate);

		Sentry::register($credentials);

		return Redirect::home();
	}

	/**
	 * Logs the user out of their session
	 *
	 * @return void
	 */
	public function logout()
	{
		Sentry::logout();

		return Redirect::home();
	}

}
