<?php 

namespace Acme\Forms;

use Laracasts\Validation\FormValidator;

class RegistrationForm extends FormValidator {

	protected $rules = [
        'username' => 'required|min:4|unique:users',
		'email'    => 'required|email|unique:users',
		'password' => 'required|min:6',
		'password_again' => 'required|same:password'
	];

} 