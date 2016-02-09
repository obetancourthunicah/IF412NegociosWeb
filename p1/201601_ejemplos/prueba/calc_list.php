<?php
    require_once("calc_lib.php");
    $registros = obtenerRegistros();

    $operaciones = array('1' => 'Sumar',
                         '2' => 'Restar',
                         '3' => 'Multiplicar',
                         '4' => 'Dividir');

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Listado de Operaciones</title>
  </head>
  <body>
      <h1>Listado de Operaciones</h1>
      <a href="calc_form.php">Otro Cálculo</a>
      <br/>
      <table>
          <tr>
              <th>Número 1</th>
              <th>Número 2</th>
              <th>Operación</th>
              <th>Resultado</th>
          </tr>
          <?php
            foreach($registros as $registro){
                echo '<tr>';
                echo '<td>'.$registro['num1'].'</td>';
                echo '<td>'.$registro['num2'].'</td>';
                echo '<td>'.$operaciones[$registro['opt']].'</td>';
                echo '<td>'.$registro['rst'].'</td>';
                echo '</tr>';
            }
          ?>

      </table>

  </body>
</html>
