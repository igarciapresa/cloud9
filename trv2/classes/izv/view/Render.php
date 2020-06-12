<?php

namespace izv\view;

class Util {

    /*Esta es la forma que se utiliza normalmente para trabajar con plantillas*/
    static function clean(string $text) {
        return preg_replace('/{{[^\s]+}}/', '', $text);
    }

    static function renderFile(string $file, array $data = array()) {
        if (!file_exists($file)) {
            return '';
        }
        $content = file_get_contents($file);
        return self::renderText($content, $data);
    }

    static function renderText(string $text, array $data = array()) {
        foreach ($data as $indice => $dato) {
            $text = str_replace('{{' . $indice . '}}', $dato, $text);
        }
        return $text;
    }
}