<?php


require 'core/bootstrap.php';

// Request -> HTTP

//dd($_SERVER);
$uri = Request::uri();

// FC -> Front Controller
Router::load('app/routes.php')->direct($uri);