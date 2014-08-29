<?php

	$ENV =[
		'DB_HOST' => 'localhost',
		'DB_NAME' => 'musbe',
		'DB_USERNAME' => 'root',
		'DB_PASSWORD' => 'root'
	];

    return array[

        'default' => 'mysql',

        'connections' => [

            'mysql' => [
                'driver'    => 'mysql',
                'host'      => $ENV['DB_HOST'],
                'database'  => $ENV['DB_NAME'],
                'username'  => $ENV['DB_USERNAME'],
                'password'  => $ENV['DB_PASSWORD'],
                'charset'   => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix'    => ''
            ]

        ],

    ];
