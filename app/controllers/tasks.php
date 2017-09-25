<?php

$pdo = Connection::connect($config);

App::bind('database', $query = new QueryBuilder($pdo));

$query = App::resolve('database');

$tasks = $query->fetchAll('tasks');

require 'app/views/tasks.view.php';