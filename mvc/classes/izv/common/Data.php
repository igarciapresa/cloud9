<?php

namespace izv\common;

trait Data {

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