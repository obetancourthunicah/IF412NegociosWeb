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
    $pizzasNuevaOrden = obtenerPizzas();
    $bebidasNuevaOrden = obtenerBebidas();
    $postresNuevaOrden = obtenerPostres();
    if(isset($_POST["btnGuardar"])){
        $nuevaOrden = nuevaOrden();
        $nuevaOrden["CodigoEntrada"] = $_POST["cmbEntrada"];
        $nuevaOrden["CodigoPizza"] = $_POST["cmbPizza"];
        $nuevaOrden["CodigoBebida"] = $_POST["cmbBebida"];
        $nuevaOrden["CodigoPostre"] = $_POST["cmbPostre"];
        $_SESSION["newOrder"] = $nuevaOrden;
        header("Location: obtenercliente.php");
        die();
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
              <?php
                    foreach($pizzasNuevaOrden as $codigoPizza => $pizza){
                        echo '<option value="'.$codigoPizza.'">';
                        $precioFinal = round($pizza["precio"] * (1+$pizza["impuesto"]),2);
                        echo $pizza["nombre"]." - L" . $precioFinal;
                        echo '</option>';
                    }
               ?>
          </select><br/>
          <label for="cmbBebida">Bebidas</label>
          <select name="cmbBebida" id="cmbBebida">
              <?php
                    foreach($bebidasNuevaOrden as $codigobebida => $bebida){
                        echo '<option value="'.$codigobebida.'">';
                        $precioFinal = round($bebida["precio"] * (1+$bebida["impuesto"]),2);
                        echo $bebida["nombre"]." - L" . $precioFinal;
                        echo '</option>';
                    }
               ?>
          </select><br/>
          <label for="cmbPostre">Postres</label>
          <select name="cmbPostre" id="cmbPostre">
              <?php
                    foreach($postresNuevaOrden as $codigopostre => $postre){
                        echo '<option value="'.$codigopostre.'">';
                        $precioFinal = round($postre["precio"] * (1+$postre["impuesto"]),2);
                        echo $postre["nombre"]." - L" . $precioFinal;
                        echo '</option>';
                    }
               ?>
          </select><br/>
          <input type="submit"
            id="btnGuardar"
            name="btnGuardar"
            value="Enviar"
            />
      </form>
  </body>
</html>
