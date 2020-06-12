<?php

namespace izv\data;

class Producto {

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

    function fetch(array $data, int $init = 0) {
        $cont = 0;
        foreach($this as $atributo => $valor) {
            if(isset($data[$cont + $init])) {
                $this->$atributo = $data[$cont + $init];
            } else {
                $this->$atributo = null;
            }
            $cont++;
        }
    }

    function get() {
        $array = [];
        foreach($this as $atributo => $valor) {
            $array[$atributo] = $valor;
        }
        return $array;
    }

    function set(array $data) {
        foreach($this as $atributo => $valor) {
            if(isset($data[$atributo])) {
                $this->$atributo = $data[$atributo];
            } else {
                $this->$atributo = null;
            }
        }
    }

    function __toString() {
        return json_encode($this->get());
    }
}