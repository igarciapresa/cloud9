<?php

namespace izv\mvc;

use izv\mvc\Router;

class Web {

    private $params;
    
    private $rutaPredeterminada = 'index';
    
    private $accionPredeterminada = 'main';
    
    private $router;
    
    function __construct(Router $router, string $parametro = null) {
        $this->router = $router;
        $this->params = explode("/", $parametro);
        if($this->params[count($this->params)-1] === '') {
            unset($this->params[count($this->params)-1]);
        }
    }
    
    function getAction() {
        $posibleAccion = $this->accionPredeterminada;
        if(count($this->params) > 0) {
            if(!$this->isRoute($this->params[0])) {
                $posibleAccion = $this->params[0];
            } else {
                if (isset($this->params[1])) {
                    $posibleAccion = $this->params[1];
                }
            }
        }
        return $posibleAccion;
    }
    
    function getData() {
        $inicial = 0;
        $data = $this->params;
        if(count($data) > 0) {
            if($this->isRoute($data[0])) {
                $inicial = 2;
            } else {
                $inicial = 1;
            }
        }
        return array_splice($data, $inicial);
    }
    
    function getRoute() {
        $posibleRuta = '';
        if(isset($this->params[0])) {
            $posibleRuta = $this->params[0];
        }
        if (!$this->isRoute($posibleRuta)) {
            $posibleRuta = $this->rutaPredeterminada;
        }
        return $posibleRuta;
    }

    private function isRoute(string $ruta) {
        return $this->router->exists($ruta);
    }
}