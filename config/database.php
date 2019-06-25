<?php
$url = parse_url(getenv('postgres://idiprlkaujoahf:b1459a0b24b0e4d1334f38a9a2cb9f81ad0a1ba719639bfb7e9b1ac0efd601ef@ec2-174-129-240-67.compute-1.amazonaws.com:5432/d8hdi8o0nv2hqq'));

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