<?php

require ('../classes/autoload.php');

use izv\http\Request;
use izv\http\Session;
use izv\http\Url;
use izv\manage\ManageProducto;

$session = Session::getInstance();

$session->auth('.');
$request = Request::getInstance();
$id = $request->input('id');
if($id === null) {
    Url::redirect('.?op=destroy&resultado=errorid');
}
$manager = new ManageProducto();
$resultado = $manager->delete($id);
Url::redirect('.?op=destroy&resultado=' . $resultado);