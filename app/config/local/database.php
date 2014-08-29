<?php

    $env = "p"; //p - production, d - development

    if($env == "p")
    {
        $ENV =[
            'DB_HOST' => getenv('DB_HOST'),
            'DB_NAME' => getenv('DB_NAME'),
            'DB_USERNAME' => getenv('DB_USERNAME'),
            'DB_PASSWORD' => getenv('DB_PASSWORD')
        ];
    }
    else
    {
        $ENV =[
            'DB_HOST' => 'localhost',
            'DB_NAME' => 'musbe',
            'DB_USERNAME' => 'root',
            'DB_PASSWORD' => 'root'
        ];
    }

    return [

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
                'prefix'    => '',
            ]

        ],

    ];
