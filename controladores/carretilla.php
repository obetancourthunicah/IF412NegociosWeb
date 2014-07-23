<?php

if ($method == "get"){
   if($_GET["page"]=="addCrt"){
        //funcionalidad para la carretilla
        require_once("modelos/carretilla.php");
        $carretillaID = obtenerCarretillaCliente();
        if(guardarLinea($carretillaID,
                        obtenerSiguienteLinea($carretillaID),
                        $_GET["prdid"])){
            header("location:index.php?page=productos&pageNum=".$_GET["pageNum"]);
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