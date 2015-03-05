<?php
  session_start();

  $_SESSION["username"]="Usuario";


  $contenidoSession ="";

  function agregarSession($dato){

    return "AS Contenido: " . $dato;
  }
  function eliminarDeSession($dato){
    return "ES Contenido: ". $dato;
  }

  if(!isset($_SESSION["click"])){
    $_SESSION["click"] = 0;
  }
  if(isset($_POST["btnAdd"])){
    $contenidoSession .= agregarSession($_POST["txtData"]);
    $_SESSION["click"] ++;
  }
  if(isset($_POST["btnSubs"])){
    $contenidoSession = eliminarDeSession($_POST["txtData"]);
    $_SESSION["click"] ++;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Funciones y SESSION</title>
  </head>
  <body>
    <h1>Funciones y el Arreglo SESSION</h1>
    <form action="ej5.php" method="POST">
        <label for="txtData">Data</label>
        <input type="text" id="txtData"
          name="txtData" />
          <br/>
        <input type="submit" name="btnAdd"
          id="btnAdd" value="Agregar a la Sesión" />
        <input type="submit" name="btnSubs"
            id="btnSubs"
            value="Eliminar de la Sesión" />
    </form>
    <div>
        <?php
          echo $contenidoSession;
        ?>
    </div>
  </body>
</html>
