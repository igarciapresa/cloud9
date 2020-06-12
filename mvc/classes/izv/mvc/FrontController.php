<?php

class FrontController {

    private $web, $router, $request;
    
    private $model, $view, $controller;
    
    function __construct(Web $web, Router $router, Request $request) {
        $this->web = $web;
        $this->router = $router;
        $this->request = $request;
        
        $routeName = $web->getRoute();
        $route = $router->getRoute($routeName);
        
        $modelName = $route->getModel();
        $viewName = $route->getView();
        $controllerName = $route->getController();
        
        $this->model = new $modelName();
        $this->view = new $viewName($this->model);
        $this->controller = new $controllerName($this->model);
    }
    
    function execute() {
        $action = $this->web->getAction();
        if(!method_exists($this->controller, $action)) {
            $action = 'main';
        }
        $this->controller->$action();
    }
    
    function render() {
        return $this->view->render();
    }
}