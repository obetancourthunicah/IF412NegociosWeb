<?php

if ($method == "get"){
   if($_GET["page"]=="addCrt"){
        //funcionalidad para la carretilla
        require_once("modelos/carretilla.php");
        require_once("modelos/productos.php");
        $carretillaID = obtenerCarretillaCliente();
        if(obtenerStockDisponible($_GET["prdid"])>0){
            if(guardarLinea($carretillaID,
                        obtenerSiguienteLinea($carretillaID),
                        $_GET["prdid"])){
                header("location:index.php?page=productos&pageNum=".$_GET["pageNum"]);
                die();
            }
        }else{
            agregarError("WARNING", "El producto no tiene stock disponible");
            header("location:index.php?page=productos&pageNum=".$_GET["pageNum"]);
            die();
        }
   }
}
if ($method == "post"){
    
}


//-------------------------------
function obtenerCarretillaCliente(){
    if(isset($_COOKIE["crtid"])){
        return $_COOKIE["crtid"];
    }else{
        //crear la cabecera de carretilla
        //obtener el id del carretilla
        require_once("modelos/carretilla.php");
        $carretillaID = nuevaCarretilla();
        setcookie("crtid", $carretillaID);
        return $carretillaID;
    }
}
?>