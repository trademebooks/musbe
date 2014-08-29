<?php

class Book extends \Eloquent {

	protected $table = 'books';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
        'user_id',
        'title',
        'author',
        'course_code_prefix',
        'course_code_suffix',
        'course_name',
        'edition',
        'description',
        'image',
        'price',
        'email',
        'phone_number'
    ];

	public function user() {

		return $this->belongsTo('User');
	}
}