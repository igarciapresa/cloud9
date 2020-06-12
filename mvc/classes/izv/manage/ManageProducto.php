<?php

namespace izv\manage;

class ManageProducto extends Manager {
    
    function __construct(Connection $connection = null) {
        parent::__construct('izv\data\Producto', 'producto', $connection);
    }

}