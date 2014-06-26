<?php
   require_once("./vistas/renderizador.php");
   echo renderizarVista("index",array("titulo"=>"Hola Mundo Test","links"=>array("link"=>"publico/estilos/estilo.css")));
?>