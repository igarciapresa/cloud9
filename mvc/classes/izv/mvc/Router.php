<?php

namespace izv\mvc;

class Router {

    private $rutaPredeterminada = 'index';
    
    private $routes = array();

    function __construct() {
        //$this->routes[$this->rutaPredeterminada] = new Route('izv\model\Model', 'izv\view\View', 'izv\controller\Controller');
        $this->routes[$this->rutaPredeterminada] = new Route(izv\model\Model::class, izv\view\View::class, izv\controller\Controller::class);
        $this->routes['x'] = new Route(izv\model\Model::class, izv\view\View::class, izv\controller\Controller::class);
    }

    function exists(string $route) {
        return isset($this->routes[$route]);
    }

    function getRoute(string $route) {
        if (!isset($this->routes[$route])) {
            return $this->routes[$this->rutaPredeterminada];
        }
        return $this->routes[$route];
    }

}