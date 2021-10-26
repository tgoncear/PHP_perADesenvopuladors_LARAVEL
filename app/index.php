<?php
require "helpers.php";
require "Task.php";
$user = 'debian-sys-maint';
$pass = 'YkXqIXFQIkDtMNPs';
try{
    $dbh = new PDO('mysql:host=localhost;dbname=phpLaravelDevs',$user,$pass);
}catch(Exception $e){
    echo 'Error de connexio a la base de dades';
}
$statement = $dbh->prepare('SELECT * FROM tasks');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_CLASS,'Task');
//var_dump($tasks);

$greeting = greet();
//$task = new Task(1,"JAVA","Veure videos java",0);
//var_dump($task);