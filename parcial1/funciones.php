<?php
/*  function sumarNumeros($a,$b){
    return $a + $b;
  }
  */
  /*

require
inlcude
include_once
  */

require_once("libreria.php");

  $msg = "";
  if(isset($_POST["btnPrc"])){
    $msg = addNumbers(intval($_POST["txtNum1"]),intval($_POST["txtNum2"]));
  }

  if(isset($_POST["btnPrm"])){
    $msg = implode(", ",primarios(intval($_POST["txtNum1"]),intval($_POST["txtNum2"])));
  }


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Funciones Ejemplo</title>
  </head>
  <body>
      <form action="funciones.php" method="post">
        <input type="number" value="0" name="txtNum1"/>
        <br />
         <input type="number" value="0" name="txtNum2"/>
         <br />
         <input type="submit" value="enviar" name="btnPrc" />
         <input type="submit" value="Primarios" name="btnPrm" />
      </form>
      <div>
        <?php echo $msg; ?>
      </div>
  </body>
</html>
