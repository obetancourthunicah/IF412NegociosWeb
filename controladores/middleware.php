<?php
    $app_errores = array();
    if(isset($_SESSION["app_errores"])){
        $app_errores = $_SESSION["app_errores"];
    }

    function agregarError($cod, $error){
        global $app_errores;
        $app_errores[] = array("codigo"=>$cod,"error"=>$error);
        $_SESSION["app_errores"] = $app_errores;
    }
    
    function limpiarErrors(){
        global $app_errores;
        $app_errores = array();
        $_SESSION["app_errores"] = $app_errores;
    }
    
    function obtenerErrores(){
        global $app_errores;
        return $app_errores;
    }
    
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
    
    if($method == "get"){
      require_once("modelos/carretilla.php");
      setData("ctdcarretilla",obtenerCtdProducto(obtenerCarretillaCliente()));
    }
?>