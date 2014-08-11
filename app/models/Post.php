<?php

class Post extends \Eloquent {

	protected $table = 'posts';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['title'];

	public function user() {

		return $this->belongsTo('User');
	}
}