<?php
//middleware de verificación

    function mw_estaLogueado(){
        if( isset($_SESSION["userLogged"])
            &&
            $_SESSION["userLogged"] == true){
            return true;
        }
        return false;
    }
    
    function mw_setEstaLogueado($usuario, $logueado){
        if($logueado){
            $_SESSION["userLogged"] = true;
            $_SESSION["userName"] = $usuario;
        }else{
            $_SESSION["userLogged"] = false;
            unset($_SESSION["userName"]);
        }
    }
    
    function mw_redirectToLogin($to){
        $loginstring = urlencode("?".$to);
        $url = "index.php?page=login&returnUrl=".$loginstring;
        header("Location:" . $url);
    }
?>