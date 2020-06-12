<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require ('../classes/autoload.php');

use izv\http\Request;
use izv\http\Session;
use izv\manage\ManageProducto;

$manager = new ManageProducto();
$request = Request::getInstance();
$session = Session::getInstance();

$productos = $manager->all();
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>dwes</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="..">dwes</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="..">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./">Producto</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main role="main">
            <div class="jumbotron">
                <div class="container">
                    <h4 class="display-4">Productos</h4>
                </div>
            </div>
            <div class="container">
                <?php
                if($request->input('op') !== null && $request->input('resultado') !== null) {
                    ?>
                    <div class="alert alert-primary" role="alert">
                        Resultado: <?= $request->input('op') . ' ' . $request->input('resultado') ?>
                    </div>
                    <?php
                }
                ?>
                <div class="row">
                    <h3>Listado de productos</h3>
                </div>
                <table class="table table-striped table-hover" id="tablaProducto">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <?php
                            if($session->isLogged()) {
                                ?>
                                <th>Borrar</th>
                                <th>Editar</th>
                                <?php
                            }
                            ?>
                            <th>Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($productos as $producto) {
                                ?>
                                <tr >
                                    <td><?php echo $producto->getId(); ?></td>
                                    <td><?= $producto->getNombre() ?></td>
                                    <td><?= $producto->getPrecio() ?></td>
                                    <?php
                                    if($session->isLogged()) {
                                        ?>
                                        <td><a href="destroy.php?id=<?= $producto->getId() ?>" class = "borrar">Borrar</a></td>
                                        <td><a href="edit.php?id=<?= $producto->getId() ?>">Editar</a></td>
                                        <?php
                                    }
                                    ?>
                                    <td><a href="show.php?id=<?= $producto->getId() ?>">Ver</a></td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
                <div class="row">
                    <?php
                    if($session->isLogged()) {
                        ?>
                        <a href="create.php" class="btn btn-success">agregar producto</a>
                        <?php
                    }
                    ?>
                </div>
                <hr>
            </div>
        </main>
        <footer class="container">
            <p>&copy; IZV 2020</p>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
    </body>
</html>