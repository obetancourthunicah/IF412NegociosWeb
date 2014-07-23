<?php
    require_once("dao/dao.php");
    function nuevaCarretilla(){
        global $conn;
        $sqlinstr="INSERT INTO carretilla (carrfching, carrFchLstUpt, carrCckOutUser) VALUES (now(), now(), '');";
        ejecutarNoQuery($conn,$sqlinstr);
        return obtenerUltimoID($conn);
    }
    function obtenerSiguienteLinea($carretilaID){
        global $conn;
        $sqlStr = "select count(*) as numLinea from carretilla_d where carretillaid = %d;";
        $numLinea = obtenerRegistro($conn,
                    sprintf($sqlStr,$carretilaID))["numLinea"];
        return $numLinea+1;
    }
    function guardarLinea($carretillaID, $linea, $productoID){
        global $conn;
        $sqlInsert = "INSERT INTO carretilla_d (carretillaid, carretillaln, productoid, carrCtd, carrPrc, carrIva) select %d, %d, %d, 1, prodPrc, prodIva from productos where productoid = %d;";
        return ejecutarNoQuery($conn,
                        sprintf($sqlInsert,$carretillaID,$linea,$productoID,$productoID)
                        );
    }
?>