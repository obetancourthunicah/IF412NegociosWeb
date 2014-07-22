<?php
    require_once("dao/dao.php");

    function obtenerProductos($pageNum = 1, $pageItems=10){
        global $conn;
        $sqlstr = "Select * from productos limit %d, %d ;";
        return obtenerRegistros( $conn,
            sprintf($sqlstr, (($pageNum -1) * $pageItems), $pageItems)
                                );
    }
    function obtenerTotalProd(){
        global $conn;
        $sqlstr = "select count(*) as total from productos;";
        return obtenerRegistro($conn,$sqlstr)["total"];
    }
?>