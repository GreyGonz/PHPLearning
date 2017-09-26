<?php

use PerroPolesiaFramework\Router;

$router = new Router();

$router->get('','PagesController@home');
$router->get('index.php','PagesController@home');
$router->get('contact','PagesController@contact');
$router->get('about','PagesController@about');
$router->get('news','PagesController@news');
$router->get('tasks','TasksController@index');
$router->get('task','TasksController@create');
$router->post('task','TasksController@store');

$router->get('error','TaskControllerNOR@error');
