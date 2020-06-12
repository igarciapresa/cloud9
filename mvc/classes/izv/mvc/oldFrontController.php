<?php

namespace izv\mvc;

use izv\mvc\Router;
use izv\mvc\Web;

class FrontController {

    private $controller;
    private $model;
    private $view;

    private $web;

    function __construct(Web $web) {
        $this->web = $web;
        $route = strtolower($web->getRoute());
        $router = new Router();
        $selectedRoute = $router->getRoute($route);
        $model = $selectedRoute->getModel();
        $view = $selectedRoute->getView();
        $controller = $selectedRoute->getController();
        $this->model = new $model();
        $this->view = new $view($this->model);
        $this->controller = new $controller($this->model);
    }

    function doAction($default = 'index') {
        $action = strtolower($this->web->getAction());
        if (method_exists($this->controller, $action)) {
            $this->controller->$action();
        } else {
            $this->controller->$default();
        }
        return $this;
    }
    
    function render() {
        return $this->view->render();
    }

}