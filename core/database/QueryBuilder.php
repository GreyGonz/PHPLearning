<?php

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
//        foreach ($fields as $field) {
//            $fields[$field]=rtrim($field, "'");
//        }

        $columns = implode(',', array_keys($fields));
        $values = ":" . implode(', :', array_keys($fields));
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";

//        dd($sql);
        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($fields);
        } catch (Exception $e) {

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