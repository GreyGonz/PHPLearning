<?php

namespace PerroPolesiaFramework\Database;
use http\Exception;
use PDO;

/**
 * Class QueryBuilder
 */

class QueryBuilder {

    protected $pdo;

    public function __construct( PDO $pdo ) {
        $this->pdo = $pdo;
    }

    public function fetchAll($table) {

        $statement = $this->pdo->prepare("SELECT * FROM $table");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table,$fields)
    {

        $columns = implode(',', array_keys($fields));
        $values = ":" . implode(', :', array_keys($fields));
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";

        try {

            $statement = $this->pdo->prepare($sql);
            $statement->execute($fields);

        } catch (Exception $e) {
            die("Algo ha passat al fer l'insert");
        }

    }


    /**
     * TO DO.
     *
     * @param $table
     * @param $filters
     */
    public function where($table,$filters){

    }
}