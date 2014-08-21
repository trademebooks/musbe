<?php namespace Acme\Forms;

use Laracasts\Validation\FormValidator;

class SellBookForm extends FormValidator {

    protected $rules = [
        'title' => 'required',
        'author' => 'required',
        'course_name' => 'required',
        'course_code' => 'required',
        'price' => 'integer',
        'email' => 'required|email',
        'phone_number' => 'required'
    ];

} 