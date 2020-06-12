<?php

namespace izv\mvc;

use izv\mvc\Router;

class Web {

    private $parameters = [];
    private $router;
    
    function __construct($route) {
        if($route !== null) {
            $this->parameters = explode('/', $route);
        }
        $this->router = new Router;
    }

    function getAction(string $default = 'index') {
        if(isset($this->parameters[0]) && $this->router->exists($this->parameters[0]) && isset($this->parameters[1])) {
            return $this->parameters[1];
        } else if(isset($this->parameters[0]) && !$this->router->exists($this->parameters[0])) {
            return $this->parameters[0];
        }
        return $default;
    }

    function getData() {
        $initial = 0;
        if(isset($this->parameters[0]) && $this->router->exists($this->parameters[0]) && isset($this->parameters[1])) {
            $initial = 2;
        } else if(isset($this->parameters[0])) {
            $initial = 1;
        }
        return array_slice($this->parameters, $initial);
    }

    function getRoute(string $default = 'web') {
        if(isset($this->parameters[0]) && $this->router->exists($this->parameters[0])) {
            return $this->parameters[0];
        }
        return $default;
    }

}