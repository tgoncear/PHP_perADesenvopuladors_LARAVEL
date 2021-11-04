<?php
namespace App\Framework;
use App\Models\Task;
use PDO;

class Database
{
    private static $dbh;
    public $config;
    /**
     * @var Connection
     */
    private $connection;


    public static function make(PDO $make)
    {
        return self;
    }

    public static function selectAll($table){
        $statement = static::$dbh->prepare('SELECT * FROM tasks;');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS,Task::class);

    }
    function insert(){

    }

}