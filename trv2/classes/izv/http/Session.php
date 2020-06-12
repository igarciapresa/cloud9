<?php

namespace izv\http;

use izv\app\Constants;
use izv\http\Request;
use izv\http\Url;

class Session {

    private const OLD = '__old';
    private const USER = '__user';

    private static $INSTANCE = null;

    private $old;

    private function __construct(string $name = '') {
        if($name != '') {
            session_name($name);
        }
        session_start();
    }

    function auth(string $redirect = '' ) {
        if(!$this->isLogged()) {
            Url::redirect($redirect);
        }
    }

    function destroy() {
        session_destroy();
    }

    function flash() {
        $request = Request::getInstance();
        $this->set(self::OLD, $request->all());
    }

    function get(string $name) {
        $value = null;
        if(isset($_SESSION[$name])) {
            $value = $_SESSION[$name];
        }
        return $value;
    }

    static function getInstance($name = null) {
        if(self::$INSTANCE === null) {
            if($name === null) {
                $name = Constants::SESSIONNAME;
            }
            self::$INSTANCE = new static($name);
            //self::$INSTANCE = new Session($name);
            //Session::$INSTANCE = new Session($name);
            //Session::$INSTANCE = new static($name);
            if(isset($_SESSION[self::OLD])) {
                self::$INSTANCE->old = $_SESSION[self::OLD];
                self::$INSTANCE->unset(self::OLD);
            }
        }
        return self::$INSTANCE;
    }

    function isLogged() {
        return $this->get(self::USER) != null;
    }

    function login($user) {
        session_regenerate_id();
        $this->set(self::USER, $user);
    }

    function logout() {
        $this->unset(self::USER);
    }

    function old(string $name, $default = null) {
        $value = $default;
        if(isset($this->old[$name])) {
            $value = $this->old[$name];
        }
        return $value;
    }

    function reflash() {
        $this->set(self::OLD, $this->old);
    }

    function set(string $name, $value) {
        if($value === null) {
            $this->unset($name);
        } else {
            $_SESSION[$name] = $value;
        }
    }

    function unset(string $name) {
        unset($_SESSION[$name]);
    }

}