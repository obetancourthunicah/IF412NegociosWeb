<?php

if ($method == "get"){
   require_once("modelos/postit.php");
   setData("postitsColl", obtenerPostits());
   echo renderizarVista("postits", $pageData);
}
if ($method == "post"){
    
}
?>