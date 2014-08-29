<?php namespace Acme\Forms;

use Laracasts\Validation\FormValidator;

class SellBookForm extends FormValidator {

    protected $rules = [
        'title' => 'required',
        'author' => 'required',
        'edition' => 'integer',
        'course_name' => 'required',
        'course_code_prefix' => 'required',
        'course_code_suffix' => 'required',
        'price' => 'integer',
        'email' => 'required|email'
    ];

} 