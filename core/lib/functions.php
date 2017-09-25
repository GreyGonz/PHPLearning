<?php

function dump($name) {
    echo '<pre>';
    var_dump($name);
    echo '</pre>';
}

function dd($name) {
    dump($name);
    die();
}

/**
 * OBSOLET.
 *
 * @return PDO
 */
function connect(){
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=prova','root','root');
    } catch (PDOException $e){
        die('Error connecting: ' . $e->getMessage() );
    }
}

/**
 * OBSOLET
 * @param $pdo
 * @return mixed
 */
function fetchAllTasks($pdo) {
    $statement = $pdo->prepare('SELECT * from tasks');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS,'Task');
}