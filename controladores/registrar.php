<?php

if ($method == "get"){
    setData("page-subtitulo","Crear Cuenta");
    echo renderizarVista("registrar", $pageData);   
}
if ($method == "post"){
    if(isset($_POST["btnInsert"])){
        $txtemail = $_POST["txtemail"];
        $txtNombre = $_POST["txtNombre"];
        $txtPWD = $_POST["txtPWD"];
        $txtCPWD = $_POST["txtCPWD"];
        
        //validacion
        //TODO: hacer las validaciones pertinentes
        
        require_once("modelos/usuarios.php");
        $txtPWDn = md5("Adouble".$txtPWD."saltingCode");
        if(guardarUsuario($txtemail,$txtNombre,$txtPWDn)){
                header("location:index.php");
                die();
            }else{
            setData("page-subtitulo","Crear Cuenta");     
            setData("txtemail" , $txtemail);
            setData("txtNombre",$txtNombre);
            setData("txtPWD", "");
            setData("txtCPWD", "");
            echo renderizarVista("registrar", $pageData);
        }
    }else {
        echo renderizarVista("registrar", $pageData);   
    }
}
?>