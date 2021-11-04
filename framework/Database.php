<?php
namespace App\Framework;
use App\Models\Task;
use PDO;

class Database
{
    public $config;
    /**
     * @var Connection
     */
    private $connection;

    public function __construct($config){
        $this->config = $config;
        $this->connection = new Connection($config);
    }
    function selectAll($table){
        $dbh = $this->connection->connectDB($this->config);
        $statement = $dbh->prepare('SELECT * FROM tasks;');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS,Task::class);
    }
    function insert(){

    }

}