<?php

if ($method == "get"){
    if($_GET["page"] == "login"){
        setData("page-subtitulo","Iniciar Sesión");
        $referer="";
        if(isset($_GET["ref"])){
            $referer=$_GET["ref"];
        }
        setData("txtReferer", $referer);
        echo renderizarVista("login",$pageData);
    }
    if($_GET["page"] == "logout"){
        logout();
        header("location:index.php");
        die();
    }
}
if ($method == "post"){
    if(isset($_POST["btnLogin"])){
        
        $txtemail = $_POST["txtemail"];
        $txtPWD = $_POST["txtPWD"];
        $txtReferer = $_POST["txtReferer"];
        
        if($txtReferer == ""){
            $txtReferer = "index";
        }
        //TODO: Validaciones aqui
        require_once("modelos/usuarios.php");
        $usuario = obtenerUsuario($txtemail);
        if(count($usuario)){
            if($usuario["usuarioestado"] == "ACT"){
                $txtPWDn = md5("Adouble".$txtPWD."saltingCode");
                if($usuario["usuariopwd"] == $txtPWDn){
                    loguear($usuario["usuarioid"]);
                    registrarLogonExitoso($txtemail);
                    header("location:index.php?page=" . $txtReferer);
                    die();
                }else{
                    agregarError("Error","¡Credenciales incorrectas!");
                    registrarLoginFallido($txtemail);
                    if($usuario["usuariopwdfallido"] + 1 >= 5){
                        cambiarEstado($txtemail,"BLK");
                        agregarError("Error","¡Su cuenta ha sido bloqueada por multiples intentos fallidos!");
                    }
                }
            }else{
                agregarError("Error","¡Credenciales incorrectas!");
                registrarLoginFallido($txtemail);
            }
        }else{
            agregarError("Error","¡Credenciales incorrectas!");
        }
        setData("page-subtitulo","Iniciar Sesión");
        setData("txtemail",$txtemail);
        setData("txtReferer",$txtReferer);
    }
    echo renderizarVista("login",$pageData);
}
?>