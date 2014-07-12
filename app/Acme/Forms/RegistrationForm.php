<?php 

namespace Acme\Forms;

use Laracasts\Validation\FormValidator;

class RegistrationForm extends FormValidator {

	protected $rules = [
		'email'    => 'required|email',
		'password' => 'required|min:6',
		'password_again' => 'required|same:password'
	];

} 