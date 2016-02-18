<?php
    $host = "127.0.0.1";
    $user = "root";
    $password = "root";
    $database = "nw201601";

    $conn = new mysqli($host,$user,$password,$database);

    if($conn->errno){
        die($conn->error);
    }

    $query = "select * from productos;";


    $cursor = $conn->query($query);

    $productos = array();

    foreach($cursor as $producto){
        $productos[]=$producto;
    }

/*
    while($producto = $cursor->fetch_assoc()){
        $productos[]=$producto;
    }
*/
    print_r($productos);
 ?>
