<?php

$url = parse_url(getenv('postgres://frnnfehkhsfuus:22a95684bf9b6934a4b9a3355b5617dbba825f2159f8328e8dc0ca3efa87926b@ec2-75-101-128-10.compute-1.amazonaws.com:5432/dbhmf7j84c4s7d'));

return [
    'default' => 'pgsql',

    'connections' => [
        'pgsql' => [
            'driver' => 'pgsql',
            'host' => $url['host'],
            'database' =>  substr($url['path'], 1),
            'username' => $url['user'],
            'password' => $url['pass'],
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
        ],
    ],
];

