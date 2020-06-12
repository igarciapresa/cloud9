<?php

namespace izv\util;

class Render {

    static function clean(string $text) {
        return preg_replace('/{{[^\s]+}}/', '', $text);
    }

    //
    static function renderFile(string $file, array $data = array()) {
        if (!file_exists($file)) {
            return '';
        }
        $content = file_get_contents($file);
        return self::renderText($content, $data);
    }

    //$texto = '<h1>{{saludo}}, {{nombre}} {{apellidos}}</h1>';'
    //$data = ['saludo' => 'Hola', 'nombre' => 'Pepe'];
    //<h1>Hola, Pepe {{apellidos}}</h1>
    static function renderText(string $text, array $data = array()) {
        foreach ($data as $indice => $dato) {
            $text = str_replace('{{' . $indice . '}}', $dato, $text);
        }
        return $text;
    }
}