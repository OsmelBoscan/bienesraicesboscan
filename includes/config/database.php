<?php 

function conectarDB() : mysqli {
    $db = new mysqli('localhost:3308', 'root', '', 'bienesraices_crud');

    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    } 

    return $db;
    
}