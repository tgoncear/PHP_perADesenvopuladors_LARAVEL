<?php
function greet(){
    $name = htmlspecialchars($_GET['name']);
    return "Hola ${name}!";
}
function dd($param){
    var_dump($param);
    die();
}
function connectDB($config){
    try{
        $user = $config['database']['user'];
        $pass = $config['database']['password'];
        $dsn = "{$config['database']['databasetype']}:host={$config['database']['host']};dbname={$config['database']['databasename']}";
        return new PDO($dsn,$user,$pass);
    }catch(Exception $e){
        echo 'Error de connexio a la base de dades';
    }
}