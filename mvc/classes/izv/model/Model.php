<?php

namespace izv\model;

use izv\database\Connection;

abstract class Model {

    /*
    Operaciones de persistencia: base de datos.
    Guardar resultados para ser usados en la vista.
    */

    private $connection;
    
    function __construct() {
        $this->connection = new Connection();
        $this->connection->connect();
    }
    
    abstract function get(string $name);
    
    function getConnection() {
        return $this->connection;
    }
    
    abstract function set(string $name, $value);

}