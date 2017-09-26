<?php

use PerroPolesiaFramework\App;
use PerroPolesiaFramework\Database\Connection;
use PerroPolesiaFramework\Database\QueryBuilder;

$config = require 'config/config.php';

require 'core/lib/functions.php';

require 'vendor/autoload.php';



$pdo = Connection::connect($config);
App::bind('database', new QueryBuilder($pdo));
