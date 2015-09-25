<?php
    session_start();
    $acumulador = 0;
    if(isset($_SESSION["acumulador"])){
        $acumulador = $_SESSION["acumulador"];
    }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Sesiones PHP parte 2</title>
  </head>
  <body>
    <h1>Contador en Sesión es
        igual a: <?php echo $acumulador; ?></h1>
  </body>
</html>
