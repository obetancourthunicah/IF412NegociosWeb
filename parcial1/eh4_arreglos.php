<?php

    $arrColores = Array("Rojo","Azul","Verde");

    echo $arrColores[0];

    $arrColores[] = "Púrpura";
    echo $arrColores[3];

    $arrColores["Secundario"] = "Anaranjado";

    echo $arrColores["Secundario"];

    $arrColores[] = "Amarillo";

    echo $arrColores[4];

    $arrColores[] = 0;

    //El uso de una ps eudo-matriz (arreglo de arreglos)

    $arrProductos = array();

    $arrProductos[] = Array(
      "codigo"=>"1",
      "descripcion"=>"Firjoles Congelados (Bolsita)",
      "precio"=>25.00,
      "stock"=>100
    );
    $arrProductos[] = Array(
      "codigo"=>"2",
      "descripcion"=>"Tortilla Maiz de Molino Bolsa de 10",
      "precio"=>15,
      "stock"=>100
    );
    $arrProductos[] = Array(
      "codigo"=>"3",
      "descripcion"=>"Queso Frijolero Del Tío",
      "precio"=>45,
      "stock"=>25
    );

    $arrProductos[] = Array(
      "codigo"=>"4",
      "descripcion"=>"Coca Cola 12oz Bolista y Popote",
      "precio"=>12,
      "stock"=>24
    );

    foreach($arrProductos as $producto){
      echo "<br/>";
      echo $producto["descripcion"]."|".$producto["precio"];
    }

    echo '<br/> <select id="cmbProductos" name="cmbProductos">';
    foreach($arrProductos as $producto){
      echo '<option value="'.$producto["codigo"].'">'.$producto["descripcion"]." | ".$producto["precio"].'</option>';
    }
    echo '</select>';

 ?>
