<?php
    //utilidades para todo el sitio
    $pageData=array();
    function setData($llave, $valor){
        global $pageData;
        $pageData[$llave] = $valor;
    }
    setData("page-titulo","Libreria");
?>