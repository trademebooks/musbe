<?php

use Acme\Forms\RegistrationForm;
use Acme\Forms\LoginForm;
use Acme\Mailers\UserMailer;
use GuzzleHttp\Client;

class AuthenticationController extends \BaseController {

    /**
     * @var $registrationForm, $loginForm, $userMailer
     */
    protected $registrationForm;
    protected $loginForm;
    protected $userMailer;

    /**
     * @param $registrationForm, $loginForm
     */
	public function __construct(RegistrationForm $registrationForm, LoginForm $loginForm, UserMailer $userMailer)
	{
		$this->registrationForm = $registrationForm;
		$this->loginForm = $loginForm;
		$this->userMailer = $userMailer;
	}

	/**
	 * Show the form for logging a user in
	 *
	 * @return View
	 */
	public function getLogin()
	{
		return View::make('auth.login');
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

		$this->loginForm->validate($credentials);

        try
        {
            $user = Sentry::authenticate($credentials, false);
            if ($user)
            {
                return Redirect::route('books.index');
            }

        }
        catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
        {
            Flash::error('The Email and/or Password is Incorrect, Please Try Again!');
            return Redirect::back();
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            Flash::error('The Email and/or Password is Incorrect, Please Try Again!');
            return Redirect::back();
        }
        /*
         * future implementation
            catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
            {
                echo 'User is not activated.';
            }
        */

	}

	/**
	 * Show the form for registering a new user
	 * and sends a mail to the user telling them they are welcomed to the family
	 *
	 * @return View
	 */
	public function getRegister()
	{
		return View::make('auth.register');
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

		$credentials = array(
			'username' => $username,
		    'email'    => $email,
		    'password' => $password,
		    'password_again' => $password_again,
		    'activated' => true
		);

		$this->registrationForm->validate($credentials);

        $credentials = array(
            'username' => $username,
            'email'    => $email,
            'password' => $password,
            'activated' => true
        );

        $user = Sentry::register($credentials);

        if ($user)
        {
        	$this->userMailer->welcome($user->email);
            return Redirect::route('registration.complete');
        }

	}

	/**
	 * Logs the user out of their session and redirects them to
     * home page
	 *
	 * @return View
	 */
	public function logout()
	{
		Sentry::logout();

		return Redirect::home();
	}

}
