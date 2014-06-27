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
    //en este arreglo se iran depositando toda la información necesaria que será pasada a las plantillas para ser renderizadas
    
    
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
        case "error":
            echo "error";
            break;
        default:
            echo "error default";
            break;
    }
    
    //utilidades básicas
    

?>