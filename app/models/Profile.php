<?php

class Profile extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
		'location',
		'bio',
		'github_username',
		'twitter_username' 
	];

}