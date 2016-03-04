<?php

    $host = "127.0.0.1";
    $user ="root";
    $pswd = "root";
    $db = "nw201601";

    $conn = new mysqli($host,$user,$pswd,$db);


    if($conn->errno){
        die("Error al Conectar a DB");
    }
    $conn->set_charset("utf8");
    function obtenerRegistros($query){
        global $conn;
        $cursor = $conn->query($query);
        $resultado = array();
        foreach($cursor as $registro){
            $resultado[]=$registro;
        }
        return $resultado;
    }

    function obtenerUnRegistro($query){
        global $conn;
        $cursor = $conn->query($query);
        $resultado = array();
        foreach($cursor as $registro){
            $resultado=$registro;
            break;
        }
        return $resultado;
    }

    function ejecutarNonQuery($query){
        global $conn;
        $resultado = $conn->query($query);
        return $resultado && true;
    }

    function obtenerUltimoID(){
        global $conn;
        return $conn->insert_id;
    }

 ?>
