<?php

    
    
    require_once("libs/dao.php");
    
    
    
    $sqlstr = "SELECT * FROM usuarios;";
    
    $result = $conexion->query($sqlstr);
    
    $resultArray = array();
    foreach($result as $registro){  
        $resultArray[] = $registro;
    }
    print_r($resultArray);
    //return $resultArray;
    
?>