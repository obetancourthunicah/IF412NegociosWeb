<?php

if ($method == "get"){
   require_once("modelos/postit.php");
   setData('page-subtitulo',"Ejemplo de Post-Its");
   setData("postitsColl", obtenerPostits());
   echo renderizarVista("postits", $pageData);
}
if ($method == "post"){
    
}
?>