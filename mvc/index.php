<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'classes/autoload.php';

use izv\http\Request;
use izv\mvc\FrontController;
use izv\mvc\Router;
use izv\mvc\Web;

$request = Request::getInstance();

$router = new Router();
$web = new Web($router, $request->input('url'));

$frontController = new FrontController($web, $router, $request);
$frontController->execute();
echo $frontController->render();

exit;

/*$route = $web->getRoute();
echo "<br>Ruta: $route<br>";
$action = $web->getAction();
echo "Accion: $action<br>";
$data = $web->getData();



var_dump($data);*/











































$web = new Web($request->input('url'));
$frontController = new FrontController($web);
$frontController->doAction();
echo $frontController->render();


