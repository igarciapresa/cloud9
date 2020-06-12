<?php
try {
    $connection = new \PDO(
      'mysql:host=localhost;dbname=producto',
      'uproducto',
      'cproducto',
      array(
        PDO::ATTR_PERSISTENT => true,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8')
    );
} catch(PDOException $e) {
    echo 'no connection';
    exit;
}
if(isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
} else {
    echo 'no nombre';
    exit;
}
if(isset($_POST['precio'])) {
    $precio = $_POST['precio'];
} else {
    echo 'no precio';
    exit;
}
$sql = 'insert into producto (nombre, precio) values (:nombre, :precio)';
$sentence = $connection->prepare($sql);
$parameters = ['nombre' => $nombre, 'precio' => $precio];
foreach($parameters as $nombreParametro => $valorParametro) {
    $sentence->bindValue($nombreParametro, $valorParametro);
}
if(!$sentence->execute()){
    echo 'no sql';
    exit;
}
$resultado = $connection->lastInsertId();
$url = '.?op=insertproducto&resultado=' . $resultado;
header('Location: ' . $url);