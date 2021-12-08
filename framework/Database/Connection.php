<?php
namespace App\Framework;
use PDO;

class Connection
{
    public static function make($config)
    {
        try{
            $user = $config['user'];
            $pass = $config['password'];
            $dsn = "{$config['databasetype']}:host={$config['host']};dbname={$config['databasename']}";
            return new PDO($dsn,$user,$pass);
        }catch(Exception $e){
            echo 'Error de connexio a la base de dades';
        }
    }


}