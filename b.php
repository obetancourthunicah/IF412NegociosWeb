<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Ejemplo PHP Sessiones 2 Listado</title>
  </head>
  <body>
      <h1>Listado de Datos en Sesión </h1>
      <table border="1">
        <tr><th>No Cuenta</th><th>Contador</th></tr>
        <?php
          if(isset($_SESSION["Cuentas"])){
            foreach($_SESSION["Cuentas"] as $Cuenta => $Contador){
              echo "<tr><td>" . $Cuenta . "</td><td>" . $Contador ."</td></tr>";
            }
          }
        ?>
      </table>
  </body>
  </html>
