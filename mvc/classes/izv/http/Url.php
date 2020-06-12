<?php

namespace izv\http;

class Url {

    static function redirect($url) {
        header('Location: ' . $url);
        exit;
    }

}