<?php
    require_once("DAO/libdb.php");
    $query = "SELECT * FROM productos where codproducto=5;";
    $productos = obtenerUnRegistro($query);

    print_r($productos);

 ?>
