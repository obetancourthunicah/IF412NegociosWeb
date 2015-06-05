<?php
    session_start();
    require_once("libreria.php");
    $entradas = obtenerEntradas();
    $pizzas = obtenerPizzas();
    $bebidas = obtenerBebidas();
    $postres = obtenerPostres();
    $vueltos = obtenerVueltos();

    $ordenes = array();

    $ordenes = $_SESSION["ordenes"];
    $contador =1;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Ordenes Guardadas</title>
  </head>
  <body>
      <h1>Ordenes Guardadas</h1>
      <table border="1">
          <tr>
              <th>#</th>
              <th>Entrada</th>
              <th>Pizza</th>
              <th>Bebida</th>
              <th>Postre</th>
              <th>Total</th>
              <th>Cliente</th>
              <th>Telefono</th>
              <th>Dirección</th>
              <th>Vuelto</th>
          </tr>
          <?php
          foreach($ordenes as $orden){
                    echo '<tr>';
                    echo       '<td>'.$contador.'</td>';
                    echo       '<td>'.$entradas[$orden["CodigoEntrada"]]["nombre"].'</td>';
                    echo       '<td>'.$pizzas[$orden["CodigoPizza"]]["nombre"].'</td>';
                    echo       '<td>'.$bebidas[$orden["CodigoBebida"]]["nombre"].'</td>';
                    echo       '<td>'.$postres[$orden["CodigoPostre"]]["nombre"].'</td>';

                    $total = ($entradas[$orden["CodigoEntrada"]]["precio"] * (1 + $entradas[$orden["CodigoEntrada"]]["impuesto"])) +
                             ($pizzas[$orden["CodigoPizza"]]["precio"] * (1 + $pizzas[$orden["CodigoPizza"]]["impuesto"])) +
                             ($bebidas[$orden["CodigoBebida"]]["precio"] * (1 + $bebidas[$orden["CodigoBebida"]]["impuesto"])) +
                             ($postres[$orden["CodigoPostre"]]["precio"] * (1 + $postres[$orden["CodigoPostre"]]["impuesto"]));

                    echo       '<td>'.$total.'</td>';
                    echo       '<td>'.$orden["Nombre"].'</td>';
                    echo       '<td>'.$orden["Telefono"].'</td>';
                    echo       '<td>'.$orden["Direccion"].'</td>';
                    echo       '<td>'.$vueltos[$orden["Pago"]]["nombre"].'</td>';
                    echo   '</tr>';
                    $contador ++;
            }
          ?>
      </table>
  </body>
</html>
