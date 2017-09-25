<?php

class Router {

    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    /**
     * OBSOLET
     * @param $routes
     */
    public function define($routes) {
        $this->routes = $routes;
    }

    public function get($uri,$file)
    {
        $this->routes['GET'][$uri] = $file;
    }

    public function post($uri,$file)
    {
        $this->routes['POST'][$uri] = $file;
    }

    public static function load($file) {
        $router = new static;
        require $file;
        return $router;
    }

    public function direct($uri,$requestType) {

        $uri = trim($uri,"/");

        if (!array_key_exists($uri,$this->routes[$requestType])) throw new Exception("No route found");

        require $this->routes[$requestType][$uri];
    }
}