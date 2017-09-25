<?php

require 'core/bootstrap.php';

// Request -> HTTP

//dd($_SERVER);

$uri = Request::uri();
$request = Request::type();

// FC -> Front Controller
Router::load('app/routes.php')->direct($uri,$request);