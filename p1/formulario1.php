<?php
  $txtNombre = "";
  $txtApellido = "";
  $txtFinal = "";

  if(isset( $_GET["btnProcesar"] )){
    $txtNombre = $_GET["txtNombre"];
    $txtApellido = $_GET["txtApellido"];
    $txtFinal = $txtNombre . " " . $txtApellido;
  }


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Formulario de HTML y PHP</title>
  </head>
  <body>
    <h1>Ejemplo de Formulario con PHP</h1>
    <form action="formulario1.php" method="get">
      <label for="txtNombre">Nombre</label>
      <input type="text" id="txtNombre"
             name="txtNombre" placeholder="Nombres"
             />
      <br/>

      <label for="txtApellido">Apellido</label>
      <input type="text" id="txtApellido"
             name="txtApellido" placeholder="Apellidos"
             />
      <br/>

      <input type="submit" value="Procesar"
            id="btnProcesar" name="btnProcesar" />

    </form>

    <div>
      <?php
          echo $txtFinal;
      ?>
    </div>
  </body>
</html>
