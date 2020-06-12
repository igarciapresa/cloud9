<?php

//errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

//encontrar archivos
require ('classes/autoload.php');

use izv\data\Producto;
use izv\manage\ManageProducto;

$manager = new ManageProducto();

echo $manager->delete(16);

//echo '<pre>' . var_export($manager->all(), true) . '</pre>';
//$producto = $manager->find(16);
//$producto->setPrecio(2.59);
//echo $manager->update($producto);
//$producto = new Producto(23, 'kiwi', 3.79);
//echo $manager->save($producto);
exit;

//clases que se usan
/*use izv\database\Connection;
use izv\database\DBPdo;
use izv\http\Request;
use izv\data\Producto;
use izv\manage\ManageProducto;

$request = Request::getInstance();

$connection = new Connection();
$connection->connect();
$manage = new ManageProducto($connection);
//echo '<pre>' . var_export($manage->all(), true) . '</pre>';
echo '<pre>' . var_export($manage->get(['id' => 4]), true) . '</pre>';

//$db = new DBPdo($connection->getPdo());
/*$manage = new ManageProducto($connection);
$producto = new Producto(200, 'plátano', 1.05);
$r = $manage->save($producto);
//$r = $manage->delete($producto);
echo '<pre>' . var_export($r, true) . '</pre>';
echo '<pre>' . var_export($r, true) . '</pre>';
echo '<pre>' . var_export($producto, true) . '</pre>';
$producto = $manage->find(19);
$r = $manage->delete($producto);
echo '<pre>' . var_export($r, true) . '</pre>';
$producto = $manage->find(5);
echo '<pre>' . var_export($producto, true) . '</pre>';
$producto->setPrecio(1.11);
$r = $manage->update($producto);
echo '<pre>' . var_export($r, true) . '</pre>';
$r = $manage->delete(20);
echo '<pre>' . var_export($r, true) . '</pre>';*/

/*$producto = new Producto();
$producto->set($request->all());
$producto->setId(null);
$db->insert('producto', $producto->get());

$db->select('producto');
while($row = $db->getRow()) {
    $producto = new Producto();
    $producto->set($row);
    echo '<pre>' . var_export($producto, true) . '</pre>';
}*/

/*echo '<pre>' . var_export($request, true) . '</pre>';

echo '<pre>' . var_export($request->all(), true) . '</pre>';

echo $request->user;
echo $request->input('user');
echo $request->query('user');
echo $request->post('user');*/

/*$producto = new Producto();
$array = [
    'id'     => 1,
    'nombre' => 'pera',
    'precio' => 3.2,
    'x'      => 'y'
];
$producto->set($request->all());
echo '<pre>' . var_export($producto, true) . '</pre>';*/