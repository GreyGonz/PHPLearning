<?php

namespace PerroPolesiaFramework\Database;

use PDO;
use PDOException;

class Connection {
    public static function connect($config) {
        try {
            $driver = $config['database']['driver'];
            $host = $config['database']['host'];
            $dbname = $config['database']['name'];
            //mysql:host=127.0.0.1;dbname=prova
            $dsn = $driver . ':host=' . $host . ';dbname=' . $dbname;
            $username = $config['database']['username'];
            $password = $config['database']['password'];
            $options = $config['database']['options'];
            return new PDO (
                $dsn,
                $username,
                $password,
                $options
            );

        } catch (PDOException $e) {
            die('Error connecting: ' . $e->getMessage());
        }
    }
}