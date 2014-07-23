<?php
    //libreria con acceso
    //a la base de datos
    $host = "127.0.0.1";
    $user = "root";
    $pswd = "root";
    $db = "nw201402";
    
    $conn = new mysqli($host,
                       $user,
                       $pswd,
                       $db);
    
    if($conn->errno!=0){
        die("Error de Conexion a la DB");
    }
    
    $conn->set_charset('utf8');
    
    function obtenerRegistros(&$conn, $sqlstr){
        $resultado = array();
        if($conn){
            $cursor = $conn->query($sqlstr);
            if($cursor){
                foreach($cursor as $registro){
                    $resultado[] = $registro;
                }
            }
        }
        return $resultado;
    }
    function obtenerRegistro(&$conn, $sqlstr){
        $resultado = array();
        if($conn){
            $cursor = $conn->query($sqlstr);
            if($cursor){
                foreach($cursor as $registro){
                    $resultado = $registro;
                    break;
                }
            }
        }
        return $resultado;
    }
    
    function ejecutarNoQuery(&$conn, $sqlstr){
        if($conn){
            //Cuando son updates o Inserts devuelve false si falla el query.
            return $conn->query($sqlstr);
        }
        return false;
    }
    
    function obtenerUltimoID(&$conn){
        return $conn->insert_id;
    }
?>