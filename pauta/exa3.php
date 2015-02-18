<?php
  session_start();
  $personas = array();
  if(isset($_SESSION["personas"])){
    $personas = $_SESSION["personas"];
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Ejercicio 3</title>
  </head>
  <body>
    <table>
      <tr>
        <th>Nombre</th>
        <th>Apellido Materno</th>
        <th>Apellido Paterno</th>
        <th>Fecha Nacimiento</th>
        <th>Género</th>
        <th>Teléfono</th>
        <th>Móvil</th>
        <th>Correo</th>
      </tr>
    <?php
      foreach($personas as $persona){
      echo "<tr>";
      echo " <td>". $persona["Nombre"] ."</td>";
      echo " <td>". $persona["ApePaterno"] ."</td>";
      echo " <td>". $persona["ApeMaterno"] ."</td>";
      echo " <td>". $persona["FechaNac"] ."</td>";
      echo " <td>". $persona["Genero"] ."</td>";
      echo " <td>". $persona["Telefono"] ."</td>";
      echo " <td>". $persona["Movil"] ."</td>";
      echo " <td>". $persona["Correo"] ."</td>";
      echo "</tr>";
    }
    ?>
    </table>
  </body>
</html>
