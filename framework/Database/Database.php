<?php
namespace App\Framework;
use App\Models\Task;
use PDO;

class Database
{
    protected $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function selectAll($table){
        $statement = $this->pdo->prepare('SELECT * FROM tasks;');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);

    }
    function insert($table, $parameters) {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (\Exception $e) {
            //
        }
    }
}