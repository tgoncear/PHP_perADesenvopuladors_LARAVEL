<?php

use App\Framework\App;
use App\Framework\Connection;
use App\Framework\Database;

App::bind('config', require 'config.php');
App::bind('database',new Database(
    Connection::make(App::get('config')['database'])
));