<?php
    //modelo de datos de productos
    require_once("libs/dao.php");
    function obtenerProductos(){
        $productos = array();
        $sqlstr = "select * from productos;";
        $productos = obtenerRegistros($sqlstr);
        return $productos;
    }
    function obtenerProductosXCategoria($catecod){
        $productos = array();
        $sqlstr = sprintf("select * from productos where catecod = %s;"
                          , $catecod);
        
        $productos = obtenerRegistros($sqlstr);
        return $productos;
    }
?>