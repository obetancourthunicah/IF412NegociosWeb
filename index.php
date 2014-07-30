<?php
    session_start();
    //Siempre se va a renderizar algo asi que se carga el renderizador
    require_once("vistas/renderizador.php");
    //Siempre es bueno tener utilidades a mano
    require_once("controladores/utilidades.php");
    // index.php?page=idPage
    $page = "error";
    if(!isset($_GET["page"])){
        $page = "index";
    }else{
        $page = $_GET["page"];
    }
    //determinado el metodo utilizado
    $method = "get";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $method="post";
    }
    //$pageData
    //en este arreglo se iran depositando toda la información necesaria que será pasada
    //a las plantillas para ser renderizadas
    
    //para levantar los errores guardados en session.
    require_once("controladores/middleware.php");
    
    switch($page){
        case "index":
            require_once("controladores/index.php");
            break;
        case "libros":
            require_once("controladores/libros.php");
            break;
        case "nuevolibro":
            require_once("controladores/nuevolibro.php");
            break;
        case "postit":
            require_once("controladores/postits.php");
            break;
        case "nuevopostit":
            require_once("controladores/nuevopostit.php");
            break;
        case "productos":
            require_once("controladores/productos.php");
            break;
        case "addCrt":
            require_once("controladores/carretilla.php");
            break;
        case "carretilla":
            require_once("controladores/carretilla.php");
            break;
        case "registrar":
            require_once("controladores/registrar.php");
            break;
        case "login":
            require_once("controladores/login.php");
            break;
        case "logout":
            require_once("controladores/login.php");
            break;
        case "error":
            echo "error";
            break;
        default:
            echo "error default";
            break;
    }
    
    //utilidades básicas
    

?>