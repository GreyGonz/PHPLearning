<?php

class Router {
    protected $routes;

    public function define($routes) {
        $this->routes = $routes;
    }

    public static function load($file) {
        $router = new static;
        $router->define(require $file);
        return $router;
    }

    public function direct($uri) {
        require $this->routes[$uri];
    }
}