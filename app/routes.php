<?php

$router = new Router();

$router->get('','app/controllers/home.php');
$router->get('index.php','app/controllers/home.php');
$router->get('contact','app/controllers/contact.php');
$router->get('about','app/controllers/about.php');
$router->get('news','app/controllers/news.php');
$router->get('tasks','app/controllers/tasks.php');
$router->get('task','app/controllers/addTask.php');
$router->post('task','app/controllers/addTask1.php');
