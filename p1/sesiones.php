<?php
    session_start();

    $acumulador = 0;
    if(isset($_SESSION["acumulador"])){
        $acumulador = $_SESSION["acumulador"];
    }

    if(isset($_POST["btnAcumular"])){
        $acumulador++;
        $_SESSION["acumulador"] = $acumulador;
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Uso de Sesiones en PHP</title>
  </head>
  <body>
      <form action="sesiones.php" method="post">
          <input type="submit"
            id="btnAcumular"
            name="btnAcumular"
            value="Elementos Acumulados <?php echo $acumulador; ?>"
           />
      </form>

  </body>
</html>
