<?php

namespace App\Controllers;

use PerroPolesiaFramework\App;

class TasksController
{

    /**
     * Resource controllers
     *
     * CRUD
     * C -> create (create | store)
     * R -> Retrieve (index)
     * U -> Update (edit | update)
     * D -> Delete (destroy)
     */

    public function index()
    {
        $database = App::resolve('database');

        $tasks = $database->fetchAll('tasks');

        require 'app/views/tasks.view.php';
    }

    public function create()
    {
        require 'app/views/task.add.view.php';
    }

    public function store()
    {
        $database = App::resolve('database');

        $database->insert('tasks',[
            "name" => $_POST['name'],
            "completed" => "0"
        ]);

        require 'app/views/successfull.view.php';
    }
}