<?php
  $txtNombre = "";
  $txtApellido = "";
  $txtFinal = "";

  if(isset( $_POST["btnProcesar"] )){
    $txtNombre = $_POST["txtNombre"];
    $txtApellido = $_POST["txtApellido"];
    $txtFinal = $txtNombre . " " . $txtApellido;
  }

  if(isset( $_POST["btnInverso"] )){
    $txtNombre = $_POST["txtNombre"];
    $txtApellido = $_POST["txtApellido"];
    $txtFinal =  $txtApellido . ", " .$txtNombre;
  }

  if(isset( $_POST["btnSaludo"] )){
    $txtNombre = $_POST["txtNombre"];
    $txtApellido = $_POST["txtApellido"];
    $txtFinal = "Saludo " . $txtApellido . ", " .$txtNombre;
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
    <form action="formulario2.php" method="post">
      <label for="txtNombre">Nombre</label>
      <input type="text" id="txtNombre"
             name="txtNombre" placeholder="Nombres"
             value="<?php echo $txtNombre; ?>"
             />
      <br/>

      <label for="txtApellido">Apellido</label>
      <input type="text" id="txtApellido"
             name="txtApellido" placeholder="Apellidos"
             value="<?php echo $txtApellido; ?>"
             />
      <br/>

      <input type="submit" value="Procesar"
            id="btnProcesar" name="btnProcesar" />
      <input type="submit" value="Inverso"
                  id="btnInverso" name="btnInverso" />
      <input type="submit" value="Saludo"
                  id="btnSaludo" name="btnSaludo" />
    </form>

    <div>
      <?php
          echo $txtFinal;
      ?>
    </div>
  </body>
</html>
