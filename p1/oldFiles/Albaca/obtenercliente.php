<?php
    session_start();
    require_once("libreria.php");
    $nuevaOrden = array();
    if(isset($_SESSION["newOrder"])){
        $nuevaOrden = $_SESSION["newOrder"];
    }else{
        header("Location:obtenerorden.php");
        die();
    }

    $entrada = obtenerEntradas()[$nuevaOrden["CodigoEntrada"]];

    $pizzas = obtenerPizzas();
    $pizzaCodigo = $nuevaOrden["CodigoPizza"];
    $pizza = $pizzas[$pizzaCodigo];

    $bebida = obtenerBebidas()[$nuevaOrden["CodigoBebida"]];
    $postre = obtenerPostres()[$nuevaOrden["CodigoPostre"]];


    $total = round(($entrada["precio"] * ( 1 + $entrada["impuesto"] ) ),2) +
            round(($pizza["precio"] * ( 1 + $pizza["impuesto"] ) ),2) +
            round(($bebida["precio"] * ( 1 + $bebida["impuesto"] ) ),2) +
            round(($postre["precio"] * ( 1 + $postre["impuesto"] ) ),2);

    $vueltos = obtenerVueltos();

    if(isset($_POST["btnGuardar"])){
        /*Falta las validaciones para asegurar la consistencia de datos*/

        $nuevaOrden["Nombre"] = $_POST["txtNombre"];
        $nuevaOrden["Direccion"] = $_POST["txtDireccion"];
        $nuevaOrden["Telefono"] = $_POST["txtTelefono"];
        $nuevaOrden["Pago"] = $_POST["cmbVuelto"];

        //Agrega la orden actual arreglo de arreglos guardada en la sesión.
        $_SESSION["ordenes"][] = $nuevaOrden;
        //Elimina la orden actual
        unset($_SESSION["newOrder"]);
        header("Location:obtenerorden.php");
        die();
    }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Obtener Datos del Cliente</title>
  </head>
  <body>
     <h1>Orden de Compra</h1>
     <table>
         <tr>
             <th>Entrada</th>
             <td><?php echo $entrada["nombre"]; ?></td>
             <td><?php echo round(($entrada["precio"] * ( 1 + $entrada["impuesto"] ) ),2); ?></td>
         </tr>
         <tr>
             <th>Pizza</th>
             <td><?php echo $pizza["nombre"]; ?></td>
             <td><?php echo round(($pizza["precio"] * ( 1 + $pizza["impuesto"] ) ),2); ?></td>
         </tr>
         <tr>
             <th>Bebida</th>
             <td><?php echo $bebida["nombre"]; ?></td>
             <td><?php echo round(($bebida["precio"] * ( 1 + $bebida["impuesto"] ) ),2); ?></td>
         </tr>
         <tr>
             <th>Postre</th>
             <td><?php echo $postre["nombre"]; ?></td>
             <td><?php echo round(($postre["precio"] * ( 1 + $postre["impuesto"] ) ),2); ?></td>
         </tr>
         <tr>
             <th colspan="2">Total</th>
             <td><?php echo $total; ?></td>
         </tr>
     </table>
    <h1>Datos del Cliente</h1>
    <form action="obtenercliente.php" method="post">
        <label for="txtNombre">Nombre</label>
        <input type="text" id="txtNombre" name="txtNombre"
            placeholder="Nombre Completo"/><br/>

        <label for="txtTelefono">Telefono</label>
        <input type="text" id="txtTelefono" name="txtTelefono"
            placeholder="Telefono"/><br/>

        <label for="txtDireccion">Dirección</label><br/>
        <textarea id="txtDireccion" name="txtDireccion"></textarea>
        <br/>

        <label for="cmbVuelto">Vuelto de</label>
        <select id="cmbVuelto" name="cmbVuelto">
            <?php
                foreach($vueltos as $codigoVuelto => $vuelto){
                    echo '<option value="' . $codigoVuelto . '">';
                    echo $vuelto["nombre"];
                    echo '</option>';
                }
             ?>
        </select>
        <br/>
        <input type="submit" value="Guardar Compra" id="btnGuardar"
        name="btnGuardar"/>
    </form>
  </body>
</html>
