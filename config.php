<?php

return [
    'database' => [
        'user' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
        'databasetype' => $_ENV['DB_CONNECTION'],
        'host' => $_ENV['DB_HOST'],
        'databasename' => $_ENV['DB_DATABASE']
    ]
];