<?php
    require_once("dao/dao.php");
    
    function nuevoPostit( $titulo, $cuerpo, $urgente = false){
        global $conn;
        $sqlinsert = sprintf("INSERT INTO postits (postName, postbody, postpriority) VALUES ('%s','%s',%d);",
                             $titulo, $cuerpo, $urgente?1:0);
        return ejecutarNoQuery($conn, $sqlinsert);
    }
    
    function borrarPostit($id){
        global $conn;
        $sqlDelete = sprintf("delete from postits where id = %d;", $id);
        return ejecutarNoQuery($conn, $sqlDelete);
    }
    
    function obtenerPostits(){
        global $conn;
        $sqlSelect = "Select * from postits;";
        return obtenerRegistros($conn,$sqlSelect);
    }
?>