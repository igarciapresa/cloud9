<?php

spl_autoload_register(function ($clase) {
    $archivo = __DIR__ . '/' . str_replace('\\', '/', $clase) . '.php';
    if(file_exists($archivo)) {
        require($archivo);
    }
});