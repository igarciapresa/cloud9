<?php

namespace izv\http;

class Request {

    private static $instance = null;

    private function __construct() {
        $this->createProperties($_GET);
        $this->createProperties($_POST);
    }

    function all() {
        $result = [];
        foreach(self::$instance as $indice => $valor) {
            $result[$indice] = $valor;
        }
        return $result;
    }

    private function createProperties(array $values) {
        foreach($values as $indice => $valor) {
            $this->$indice = self::getValue($indice, $values);
        }
    }

    private static function getCleanedValue(string $value, string $default = null) {
        $value = trim($value);
        if($value === '') {
            $value =  $default;
        }
        return $value;
    }

    static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new Request();
        }
        return self::$instance;
    }

    private static function getValue(string $name, array $values, string $default = null) {
        $value = $default;
        if(isset($values[$name])) {
            $value = self::getCleanedValue($values[$name], $default); //trim($values[$name]);
        }
        return $value;
    }

    function input(string $name, string $default = null) {
        $value = $default;
        if(isset($this->$name) && $this->$name !== null) {
            $value = $this->$name;
        }
        return $value;
    }

    function ip() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    function isHttps() {
        return (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ||
                    $_SERVER['SERVER_PORT'] == 443;
    }

    function method() {
        return $_SERVER['REQUEST_METHOD'];
    }

    function post(string $name, string $default = null) {
        return self::getValue($name, $_POST, $default);
    }

    function query(string $name, string $default = null) {
        return self::getValue($name, $_GET, $default);

    }
}