<?php

use App\Framework\App;
use App\Framework\Connection;
use App\Framework\Database;
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();
App::bind('config', require 'config.php');
App::bind('database',new Database(
    Connection::make(App::get('config')['database'])
));
