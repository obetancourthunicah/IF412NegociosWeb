<?php
 //Arreglos
 $arrNombre = array("Hola","Como","Estas");

  $arrAsociativo = array("Nombre"=>"Fulano",
                        "Apellido" => "De Tal"
                        );

  $arrAsociativo[] = "Edad NS";
  $arrAsociativo["Edad"] = "Edad NS";
  $arrAsociativo[10] = "Otro Valor";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Ejemplo de Arreglos.</title>
  </head>
  <body>
    <h1>Arreglos en PHP</h1>
    <h2>Arreglos simple de solo valores</h2>
    <?php
      foreach($arrNombre as $item){
        echo $item . "<br/>";
    }
    ?>
    <h2>Arreglo asociativo</h2>
    <?php
      foreach($arrAsociativo as $llave => $valor){
        echo $llave . " - " . $valor . "<br/>";
      }
    ?>
  </body>
</html>
