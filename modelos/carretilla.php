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
    function obtenerCtdProducto($carretillaId){
        global $conn;
        $sqlstr = "select count(*) as productos from carretilla_d where carretillaid = %d;";
        return obtenerRegistro($conn,
                               sprintf($sqlstr, $carretillaId))["productos"];
    }
    function obtenerProductosCarretillaXId($carretillaId){
        global $conn;
        $sqlstr = "SELECT a.carretillaid, a.carretillaln,  a.productoid, b.producto, a.carrCtd, a.CarrPrc, a.carrIva FROM carretilla_d a inner join productos b on a.productoid = b.productoid where carretillaid = %d order by a.carretillaln;";
        return obtenerRegistros($conn,
                                sprintf($sqlstr, $carretillaId));
    }
?>