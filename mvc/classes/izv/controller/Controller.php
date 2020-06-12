<?php

namespace izv\controller;

use izv\model\Model;
use izv\http\Session;

abstract class Controller {

    /*
    proceso general:
    1º control de sesión
    2º obtención y validación de datos
    3º usar el modelo
    4º guardar resultados en el modelo
    */

    private $model;
    private $session;

    function __construct(Model $model) {
        $this->model = $model;
        $this->session = Session::getInstance();
    }
    
    function getModel() {
        return $this->model;
    }
    
    function getSession() {
        return $this->session;
    }

    abstract function index();

}