<?php

namespace izv\database;

class DBPdo {

    private $pdo;
    private $statement;

    function __construct(\PDO $pdo) {
        $this->pdo = $pdo;
    }

    function delete(string $table, array $whereParameters = []) {
        $result = 0;
        $condition = $this->whereCondition($whereParameters);
        $sql = "delete from $table $condition";
        if($this->execute($sql, $whereParameters)) {
            $result = $this->rows();
        }
        return $result;
    }

    function execute(string $sql, array $parameters = []) {
        //var_dump($sql);
        //var_dump($parameters);
        try {
            $this->statement = $this->pdo->prepare($sql);
            foreach($parameters as $name => $value) {
                $this->statement->bindValue($name, $value);
            }
            $result = $this->statement->execute();
        } catch (\PDOException $e) {
            var_dump($e);
            $result = false;
        }
        return $result;
    }

    function getRow() {
        return $this->statement->fetch();
    }

    function getRows() {
        $result = [];
        while($row = $this->getRow()) {
            $result[] = $row;
        }
        return $result;
    }

    function id() {
        return $this->pdo->lastInsertId();
    }

    function insert(string $table, array $parameters) {
        $fields = $this->insertFields($parameters);
        $values = $this->insertValues($parameters);
        $sql = "insert into $table ($fields) values ($values)";
        $result = $this->execute($sql, $parameters);
        if ($result) {
            $result = $this->id();
        } else {
            $result = 0;
        }
        return $result;
    }

    function rows() {
        return $this->statement->rowCount();
    }

    function select(string $table, array $whereParameters = []) {
        $condition = $this->whereCondition($whereParameters);
        $sql = "select * from $table $condition";
        return $this->execute($sql, $whereParameters);
    }

    function update(string $table, array $updateParameters, array $whereParameters = []) {
        $set = $this->setParameters($updateParameters, '_set');
        $condition = $this->whereCondition($whereParameters, 'and', '_where');
        $parameters = $this->renameParameters($updateParameters, '_set') +
                        $this->renameParameters($whereParameters, '_where');
        $sql = "update $table set $set $condition";
        $result = $this->execute($sql, $parameters);
        if ($result) {
            $result = $this->rows();
        } else {
            $result = 0;
        }
        return $result;
    }

    private function conditionParameters(array $parameters, string $operator = 'and', string $char = '') {
        $result = '';
        foreach($parameters as $name => $value) {
            $result .= " $name = :$char$name $operator";
        }
        return substr($result, 0, -strlen($operator));
    }

    private function insertFields(array $parameters) {
        return $this->insertParameters($parameters);
    }

    private function insertParameters(array $parameters, string $char = '') {
        $result = '';
        foreach($parameters as $name => $value) {
            $result .= "$char$name,";
        }
        return substr($result, 0, -1);
    }
    
    private function insertValues(array $parameters) {
        return $this->insertParameters($parameters, ':');
    }

    private function renameParameters(array $parameters, string $prefix = '') {
        $result = [];
        foreach($parameters as $name => $value) {
            $result[$prefix . $name] = $value;
        }
        return $result;
    }

    private function setParameters(array $parameters, string $prefix = '') {
        return $this->conditionParameters($parameters, ',', $prefix);
    }

    private function whereCondition(array $parameters, string $operator = 'and', string $char = '') {
        $result = $this->conditionParameters($parameters, $operator, $char);
        if(strlen($result) > 0) {
           $result ='where' . $result;
        }
        return $result;
    }

}