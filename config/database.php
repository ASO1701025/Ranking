<?php
$url = parse_url(getenv('postgres://zauxootxmfcuej:10e40c75899206391ce95debc676bfabb6449c3ba978e5977f74da7271c47917@ec2-107-20-173-2.compute-1.amazonaws.com:5432/d43ni8pte679sa'));

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