<?php

$env = 'd'; // p=production, d=development

$ENV = [];

if($env == 'p') 
{
	$ENV =[
		'DB_HOST' => '107.170.116.126',
		'DB_NAME' => 'musbe',
		'DB_USERNAME' => 'forge',
		'DB_PASSWORD' => 'Y3TAgFalTuAdWQydSUWX'
	];
}
else {
	$ENV =[
		'DB_HOST' => 'localhost',
		'DB_NAME' => 'musbe',
		'DB_USERNAME' => 'root',
		'DB_PASSWORD' => 'root'
	];
}

return array(

	'default' => 'mysql',

	'connections' => array(

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => $ENV['DB_HOST'],
			'database'  => $ENV['DB_NAME'],
			'username'  => $ENV['DB_USERNAME'],
			'password'  => $ENV['DB_PASSWORD'],
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		)

	),

);
