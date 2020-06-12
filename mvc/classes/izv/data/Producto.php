<?php

namespace izv\data;

use izv\common\Data;

class Producto {

    use Data;

    private $id, $nombre, $precio;

    function __construct($id = null, $nombre = null, $precio = null) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getPrecio() {
        return $this->precio;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

}