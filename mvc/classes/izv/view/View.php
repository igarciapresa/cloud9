<?php

namespace izv\view;

use izv\model\Model;

abstract class View {

    /*
    Renderizar el resultado final usando para ello los datos proporcionados
    por el modelo.
    */

    private $model;

    function __construct(Model $model) {
        $this->model = $model;
    }
    
    function getModel() {
        return $this->model;
    }

    abstract function render();
}