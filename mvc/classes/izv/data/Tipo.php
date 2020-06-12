<?php

namespace izv\data;

use izv\common\Data;

class Tipo {
    
    use Data;

    private $id, $tipo;

    function __construct($id = null, $tipo = null) {
        $this->id = $id;
        $this->tipo = $tipo;
    }

    function getId() {
        return $this->id;
    }

    function getTipo() {
        return $this->tipo;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
        return $this;
    }
}