<?php

function obtenerEntradas(){
    $entradas = array();
    $entradas["ENT01"] = array(
        "codigo" => "ENT01" ,
        "nombre"=> "Tostadas de Pastrami y Tomate Cerezo" ,
        "precio"=> 80.00,
        "impuesto"=> 0.12
    );
    $entradas["ENT02"] = array(
        "codigo" => "ENT02" ,
        "nombre"=> "Brochetas de Frutas" ,
        "precio"=> 60.00,
        "impuesto"=> 0.12
    );
    $entradas["ENT03"] = array(
        "codigo" => "ENT03" ,
        "nombre"=> "Ensalada Ceasar" ,
        "precio"=> 180.00,
        "impuesto"=> 0.12
    );
    $entradas["ENT04"] = array(
        "codigo" => "ENT04" ,
        "nombre"=> "Caldo de Pollo Criollo" ,
        "precio"=> 120.00,
        "impuesto"=> 0.12
    );

    return $entradas;    
}




?>
