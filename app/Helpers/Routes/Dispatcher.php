<?php

namespace App\Helpers\Routes;

use App\Helpers\Routes\Route;

class Dispatcher {
/*     private string $requestMethod; 
    private string $requestUrl; */

    public function __construct(private string $requestMethod, private string $requestUrl)
    {
        
/*         $this->$requestMethod = $requestMethod;
        $this->$requestUrl = $requestUrl; */
    }

    public function dispatch() {
        $routes_of_method = Route::getRoutes()[$this->requestMethod];
        foreach ($routes_of_method as $route => $action) {
            if ($route === $this->requestUrl) {
                return $this->executeAction($action);
            }
        }
    }

    private function executeAction($action) {
        if (is_callable($action)) {
            return $action();
        }
        if (is_array($action)) {
            list($controller, $method) = $action;
        } elseif (class_exists($action)) {
            $controller = $action;
        } else {
            list($controller, $method) = explode('@', $action);
        }
        
        if ($this->requestMethod == 'GET') {
            $payload = $_GET;
        } else {
            $payload = $_POST;
        }
        

        $controller = new $controller;
        
        if (!empty($method)) {
            return $controller->$method(...$payload);
        }
        return $controller->index();
    }
}