<?php

use PerroPolesiaFramework\Request;
use PerroPolesiaFramework\Router;

require 'core/bootstrap.php';


Router::load('app/routes.php')->direct(Request::uri(), Request::type());