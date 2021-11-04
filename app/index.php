<?php

use App\Framework\App;
use App\Framework\Database;

require "helpers.php";

//$user = 'debian-sys-maint';
//$pass = 'YkXqIXFQIkDtMNPs';
//$dsn = 'mysql:host=localhost;dbname=phpLaravelDevs';

//$dbh = connectDB($config);
$database = new Database(App::get('config')['database']);
$tasks = Database::selectAll('tasks');
//$statement = $dbh->prepare('SELECT * FROM tasks');
//$statement->execute();
//$tasks = $statement->fetchAll(PDO::FETCH_CLASS,'Task');
//var_dump($tasks);

$greeting = greet();
//$task = new Task(1,"JAVA","Veure videos java",0);
//var_dump($task);