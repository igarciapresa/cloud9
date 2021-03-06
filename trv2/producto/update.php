<?php

require ('../classes/autoload.php');

use izv\data\Producto;
use izv\http\Request;
use izv\http\Session;
use izv\http\Url;
use izv\manage\ManageProducto;

$session = Session::getInstance();

$session->auth('.');

$request = Request::getInstance();

$producto = new Producto();
$producto->set($request->all());

if($producto->getId() === null) {
    Url::redirect('.?op=update&resultado=errorid');
}
if($producto->getNombre() === null) {
    Url::redirect('edit.php?op=errornombre');
}
if($producto->getPrecio() === null) {
    Url::redirect('edit.php?op=errorprecio');
}

$ok = true;
if(strlen($producto->getNombre()) < 2 || strlen($producto->getNombre()) > 100) {
    $ok = false;
}
if(!(is_numeric($producto->getPrecio()) && $producto->getPrecio() >= 0 && $producto->getPrecio() <= 1000000)) {
    $ok = false;
}
if($ok === false) {
    $session->flash();
    Url::redirect('edit.php?id=' . $producto->getId() . '&op=errordata');
}

$manager = new ManageProducto();
$resultado = $manager->update($producto);
Url::redirect('.?op=update&resultado=' . $resultado);