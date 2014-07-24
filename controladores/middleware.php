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
?>