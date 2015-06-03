<?php
    session_start();
    require_once("libreria.php");
    /*
    include
    include_once
    require
    require_once
    */
    $entradasNuevaOrden = obtenerEntradas();
    if(isset($_POST["btnGuardar"])){

    }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>La Albaca Nueva Orden</title>
  </head>
  <body>
      <h1>Nueva Orden</h1>
      <form action="obtenerorden.php" method="post">
          <label for="cmbEntrada">Entradas</label>
          <select name="cmbEntrada" id="cmbEntrada">
              <?php
                    foreach($entradasNuevaOrden as $codigoEntrada => $entrada){
                        echo '<option value="'.$codigoEntrada.'">';
                        $precioFinal = round($entrada["precio"] * (1+$entrada["impuesto"]),2);
                        echo $entrada["nombre"]." - L" . $precioFinal;
                        echo '</option>';
                    }
               ?>
          </select><br/>
          <label for="cmbPizza">Pizzas</label>
          <select name="cmbPizza" id="cmbPizza">
              <?php //todo ?>
          </select><br/>
          <label for="cmbBebida">Bebidas</label>
          <select name="cmbBebida" id="cmbBebida">
              <?php //todo ?>
          </select><br/>
          <label for="cmbPostre">Postres</label>
          <select name="cmbPostre" id="cmbPostre">
              <?php //todo ?>
          </select><br/>
          <input type="submit"
            id="btnGuardar"
            name="btnGuardar"
            value="Enviar"
            />
      </form>
  </body>
</html>
