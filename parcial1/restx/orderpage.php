<?php
   session_start();
    require_once("library.php");
    // $_SESSION
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Restaurante X Online</title>
  </head>
  <body>
    <h1>Ordene Aqúi</h1>
    <form action="orderpage.php" method="post">
      <label for="cmbPlatoEntrada">Plato de Entrada</label>
      <?php echo generateComboBox("cmbPlatoEntrada",$platosEntrada,"codigo","nombre","EN");?>
      <br />
      <label for="cmbPlatoFuerte">Plato Fuerte</label>
      <?php echo generateComboBox("cmbPlatoFuerte",$platosFuerte,"codigo","nombre","FN");?>
      <br />
      <label for="cmbBebida">Bebida</label>
      <?php echo generateComboBox("cmbBebida",$refrescos,"codigo","nombre","RN");?>
      <br />
      <label for="cmbPostre">Postre</label>
      <?php echo generateComboBox("cmbPostre",$postres,"codigo","nombre","PN");?>
      <br />
      <label for="txtCliente">Nombre Completo</label>
      <input type="text" value="" name="txtCliente" />
      <br />
      <label for="txtDireccionEntrega">Dirección de Entrega</label>
      <input type="text" value="" name="txtDireccionEntrega" />
      <br/>
      <label for="txtCorreo">Correo Electrónico</label>
      <input type="email" value="" name="txtCorreo" />
      <br />
      <label for="txtTelefono">Telefono</label>
      <input type="text" value="" name="txtTelefono" />
      <br/>
      <input type="submit" value="Ordenar" name="btnOrdenar" />
    </form>
  </body>
</html>
