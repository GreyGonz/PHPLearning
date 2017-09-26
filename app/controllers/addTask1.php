<?php

$database = App::resolve('database');

$database->insert('tasks',[
    "name" => $_POST['name'],
    "completed" => "0"
]);

// insert into table_name (column1, column2, column3) values (value1, value2, value3)

require 'app/views/successfull.view.php';