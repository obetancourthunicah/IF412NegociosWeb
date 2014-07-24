<?php
//controladore del index

if ($method == "get"){
    require_once("modelos/libros.php");
    setData('page-subtitulo',"Simple MVC NW");
    setData("libros", obtenerLibrosIndex());
    echo renderizarVista("index", $pageData);
}
if ($method == "post"){
    
}
?>