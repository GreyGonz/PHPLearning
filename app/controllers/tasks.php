<?php

$database = App::resolve('database');

$tasks = $database->fetchAll('tasks');

require 'app/views/tasks.view.php';