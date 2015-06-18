<?php
    $host = "127.0.0.1";
    $user = "root";
    $pswd = "root";
    $db = "nw201502";

    $conn = new mysqli($host,
                     $user,
                     $pswd,
                     $db);

    if($conn->errno){
        die($conn->error);
    }

    function obtenerProductos(){
        global $conn;
        $Productos = array();
        $cursorProductos = $conn->query("select * from productos;");
        if($cursorProductos){
            while($producto = $cursorProductos->fetch_assoc()){
                $Productos[] = $producto;
            }
        }
        return $Productos;
    }

 ?>
