<?php

    session_start();

    require_once("libs/utilities.php");

    $pageRequest = "home";

    if(isset($_GET["page"])){
        $pageRequest = $_GET["page"];
    }

    require_once("controllers/site.mw.php");
    require_once("controllers/verificar.mw.php");

    switch($pageRequest){
        case "home":
            //llamar al controlador
            require_once("controllers/home.control.php");
            break;
        case "menu":
            require_once("controllers/menu.control.php");
            break;
        case "productos":
            require_once("controllers/productos.control.php");
            break;
        case "login":
            require_once("controllers/login.control.php");
            break;
        case "registro":
            require_once("controllers/registro.control.php");
            break;
        case "reservacion":
            require_once("controllers/reservacion.control.php");
            break;
        default:
            require_once("controllers/error.control.php");

    }


?>
