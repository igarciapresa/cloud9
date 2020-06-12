<?php

namespace izv\manage;

use izv\database\Connection;
use izv\database\DBPdo;

class Manager {
    
    private $dbPdo;
    private $table;
    private $class;
    
    function __construct($class, $table, Connection $connection = null) {
        $this->class = $class;
        $this->table = $table;
        if($connection === null) {
            $connection = new Connection();
            $connection->connect();
        }
        if($connection->isConnect()) {
            $this->dbPdo = new DBPdo($connection->getPdo());
        } else {
            throw new \Exception('No hay na que rascar');
        }
    }
    
    function all() {
        $result = [];
        if($this->dbPdo->select($this->table)) {
            while($row = $this->dbPdo->getRow()) {
                $objeto = new $this->class();
                $objeto->set($row);
                $result[] = $objeto;
            }
        }
        return $result;
    }
    
    function delete($objetoOrId) {
        $id = $objetoOrId;
        if($objetoOrId instanceof $this->class) {
            $id = $objetoOrId->getId();
        }
        $where = ['id' => $id];
        return $this->dbPdo->delete($this->table, $where);
    }
    
    function find(int $id) {
        $result = null;
        $where = ['id' => $id];
        if($this->dbPdo->select($this->table, $where)) {
            if($row = $this->dbPdo->getRow()) {
                $objeto = new $this->class();
                $objeto->set($row);
                $result = $objeto;
            }
        }
        return $result;
    }
    
    //interface, más adelante
    function save($objeto) {
        $result = 0;
        if($objeto instanceof $this->class) {
            $data = $objeto->get();
            unset($data['id']);
            //$data['id'] = null;
            $result = $this->dbPdo->insert($this->table, $data);
            if($result > 0) {
                $objeto->setId($result);
            }
        }
        return $result;
    }
    
    function update($objeto) {
        $result = 0;
        if($objeto instanceof $this->class) {
            $data = $objeto->get();
            $where = ['id' => $objeto->getId()];
            unset($data['id']);
            $result = $this->dbPdo->update($this->table, $data, $where);
        }
        return $result;
    }
}