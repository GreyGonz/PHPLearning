<?php


require 'core/bootstrap.php';

$uri = "tasks";

//dd(trim('/about/','/'));
//
//dd($_SERVER);


// FC -> Front Controler
Router::load('app/routes.php')->direct($uri);