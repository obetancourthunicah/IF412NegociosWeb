<?php
    $colores  = array();
    $colores["red"] = array(
        "nombre" => "Rojo",
        "red" => 255,
        "green" => 0,
        "blue" => 0,
        "hex" => "#FF0000"
    );
    $colores["blue"] = array(
        "nombre" => "Azul",
        "red" => 0,
        "green" => 0,
        "blue" => 255,
        "hex" => "#0000FF"
    );
    $colores["green"] = array(
        "nombre" => "Verde",
        "red" => 0,
        "green" => 255,
        "blue" => 0,
        "hex" => "#00FF00"
    );

    /*
    //Otra Forma
    $colores  = array(
    "red" => array(
        "nombre" => "Rojo",
        "red" => 255,
        "green" => 0,
        "blue" => 0,
        "hex" => "#FF0000"
    ),
    "blue" => array(
        "nombre" => "Azul",
        "red" => 0,
        "green" => 0,
        "blue" => 255,
        "hex" => "#0000FF"
    ),
    "green" => array(
        "nombre" => "Verde",
        "red" => 0,
        "green" => 255,
        "blue" => 0,
        "hex" => "#00FF00"
    ));

    */

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Uso de Arreglo Multidimensionales
        para Combo Box</title>
  </head>
  <body>
      <h1>Como llenar un ComboBox</h1>
      <h2>A Partir de un Arreglo Multidimensional</h2>
      <form action="arregloMltComboBox.php"
            method="post">
            <label for="cmbColor">
                Seleccione un color
            </label>
            <select name="cmbColor" id="cmbColor">
                <?php
                    //TODO: Llenar Combobox
                    foreach($colores as $llave => $valor){
                        echo '<option value="'.$llave
                             .'">'.$valor["nombre"]
                             .'</option>';
                    }
                ?>
            </select>
            <br/>
            <input type="submit" id="btnProcesar"
            name="btnProcesar" value="Seleccionar" />
      </form>
  </body>
</html>
