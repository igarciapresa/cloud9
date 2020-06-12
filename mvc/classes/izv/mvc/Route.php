<?php

namespace izv\mvc;

class Route {

    private $controller;
    private $model;
    private $view;

    function __construct($model, $view, $controller) {
        $this->model = $model;
        $this->view = $view;
        $this->controller = $controller;
    }

    function getController() {
        return $this->controller;
    }
    
    function getModel() {
        return $this->model;
    }

    function getView() {
        return $this->view;
    }

}