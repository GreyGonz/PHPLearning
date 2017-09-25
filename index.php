<?php


require 'core/bootstrap.php';

$uri = $_SERVER['REQUEST_URI'];

// FC -> Front Controller
Router::load('app/routes.php')->direct($uri);