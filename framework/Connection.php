<?php
namespace App\Framework;
use PDO;

class Connection
{
    private $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    function connectDB(){
        try{
            $user = $this->config['database']['user'];
            $pass = $this->config['database']['password'];
            $dsn = "{$this->config['database']['databasetype']}:host={$this->config['database']['host']};dbname={$this->config['database']['databasename']}";
            return new PDO($dsn,$user,$pass);
        }catch(Exception $e){
            echo 'Error de connexio a la base de dades';
        }
    }
}