<?php

namespace izv\database;

use izv\app\Constants;

class Connection {

    private $host, $db, $user, $password;
    
    private $connection = null;

    function __construct(string $host = null, string $db = null, string $user = null, string $password = null) {
        $this->host = $host;
        if($this->host === null) {
            $this->host = Constants::HOST;
        }
        $this->db = $db;
        if($this->db === null) {
            $this->db = Constants::DB;
        }
        $this->user = $user;
        if($this->user === null) {
            $this->user = Constants::USER;
        }
        $this->password = $password;
        if($this->password === null) {
            $this->password = Constants::PASSWORD;
        }
        
    }
    
    function __destruct() {
        $this->close();
    }

    function close() {
        $this->connection = null;
    }

    function connect() {
        $result = true;
        try {
            $this->connection = new \PDO(
                'mysql:host=' . $this->host . ';dbname=' . $this->db,
                $this->user,
                $this->password,
                array(
                    \PDO::ATTR_PERSISTENT => true,
                    \PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8')
            );
        } catch(\PDOException $e) {
            var_dump($e);
            $this->connection = null;
            $result = false;
        }
        return $result;
    }
    
    function getPdo() {
        return $this->connection;
    }

    function isConnect() {
        return ($this->connection !== null);
    }
}