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
        die("ERROR" . $conn->error);
    }

    $productos = $conn->query("select * from productos;");
    $prdArr = array();
    while($producto = $productos->fetch_assoc()){
        $prdArr[] = $producto;
    }

    print_r($prdArr);
?>
