<?php
namespace App\Framework;
use PDO;

class Connection
{
    private static $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public static function make($config)
    {
        static::$config = config;
        try{
            $user = $config['database']['user'];
            $pass = $config['database']['password'];
            $dsn = "{$config['database']['databasetype']}:host={$config['database']['host']};dbname={$config['database']['databasename']}";
            return new PDO($dsn,$user,$pass);
        }catch(Exception $e){
            echo 'Error de connexio a la base de dades';
        }
    }


}