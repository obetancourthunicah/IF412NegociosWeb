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

function obtenerPizzas(){
    $pizzas = array();
    $pizzas["PZZ01"] = array(
        "codigo" => "PZZ01" ,
        "nombre"=> "Jamón y Queso" ,
        "precio"=> 250.00,
        "impuesto"=> 0.12
    );
    $pizzas["PZZ02"] = array(
        "codigo" => "PZZ02" ,
        "nombre"=> "Margarita" ,
        "precio"=> 290.00,
        "impuesto"=> 0.12
    );
    $pizzas["PZZ03"] = array(
        "codigo" => "PZZ03" ,
        "nombre"=> "Peperonni" ,
        "precio"=> 290.00,
        "impuesto"=> 0.12
    );
    $pizzas["PZZ04"] = array(
        "codigo" => "PZZ04" ,
        "nombre"=> "Cuatro Estaciones" ,
        "precio"=> 400.00,
        "impuesto"=> 0.12
    );

    return $pizzas;
}


function obtenerBebidas(){
    $bebidas = array();
    $bebidas["RFS01"] = array(
        "codigo" => "RFS01" ,
        "nombre"=> "Sodas" ,
        "precio"=> 35.00,
        "impuesto"=> 0.12
    );
    $bebidas["RFS02"] = array(
        "codigo" => "RFS02" ,
        "nombre"=> "Soda Dieta" ,
        "precio"=> 35.00,
        "impuesto"=> 0.12
    );
    $bebidas["RFS03"] = array(
        "codigo" => "RFS03" ,
        "nombre"=> "Natural" ,
        "precio"=> 40.00,
        "impuesto"=> 0.12
    );
    $bebidas["RFS04"] = array(
        "codigo" => "RFS04" ,
        "nombre"=> "Vino" ,
        "precio"=> 200.00,
        "impuesto"=> 0.12
    );

    return $bebidas;
}

function obtenerPostres(){
    $postres = array();
    $postres["PST01"] = array(
        "codigo" => "PST01" ,
        "nombre"=> "Copa de Helado" ,
        "precio"=> 75.00,
        "impuesto"=> 0.12
    );
    $postres["PST02"] = array(
        "codigo" => "PST02" ,
        "nombre"=> "Cheese Cake" ,
        "precio"=> 85.00,
        "impuesto"=> 0.12
    );
    $postres["PST03"] = array(
        "codigo" => "PST03" ,
        "nombre"=> "Chocolate Caliente" ,
        "precio"=> 40.00,
        "impuesto"=> 0.12
    );
    $postres["PST04"] = array(
        "codigo" => "PST04" ,
        "nombre"=> "Tiramisu Flameado" ,
        "precio"=> 200.00,
        "impuesto"=> 0.12
    );

    return $postres;
}

function obtenerVueltos(){
    return array(
        "VLT100" => array(
            "codigo" => "VLT100",
            "nombre" => "Vuelto de L100 ",
            "nominal" => 100
        ),
        "VLT500" => array(
            "codigo" => "VLT500",
            "nombre" => "Vuelto de L500 ",
            "nominal" => 500
        )
    );
}

function nuevaOrden(){
    $nuevaOrden = array(
        "CodigoEntrada" =>"",
        "CodigoPizza" => "",
        "CodigoBebida" =>"",
        "CodigoPostre" => "",
        "Nombre" => "",
        "Direccion" => "",
        "Telefono" => "",
        "Pago" => ""
    );
    return $nuevaOrden;
}


?>
