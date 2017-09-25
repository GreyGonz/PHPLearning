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

        $uri = trim($uri,"/");

        if (!array_key_exists($uri,$this->routes)) throw new Exception("No route found");

        require $this->routes[$uri];
    }
}