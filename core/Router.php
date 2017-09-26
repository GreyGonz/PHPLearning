<?php

namespace PerroPolesiaFramework;

use Exception;

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

    public function get($uri,$action)
    {
        $this->routes['GET'][$uri] = $action;
    }

    public function post($uri,$action)
    {
        $this->routes['POST'][$uri] = $action;
    }

    public static function load($file) {
        $router = new static;
        require $file;
        return $router;
    }

    public function direct($uri,$requestType) {

        $uri = trim($uri,"/");

        if (!array_key_exists($uri,$this->routes[$requestType])) throw new Exception("No route found");



        $action = explode("@",$this->routes[$requestType][$uri]);

        $controller = 'App\Controllers\\' . $action[0];
        $method = $action[1];

        // Check class exist
        if (class_exists($controller)) {
            $controller = new $controller();
        } else {
            throw new Exception('La classe no existeix');
        }


        // Check method exist
        if (method_exists($controller, $method)){
            $controller->$method();
        } else {
            dd($method);
            throw new Exception('El metode no existeix');
        }


//        require $this->routes[$requestType][$uri];
    }
}