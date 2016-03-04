<?php
    require_once('DAO/libdb.php');

    $sqlstr = 'SELECT a.idtarea, a.tarea, a.prioridad,a.estado, a.idcategoria, b.categoria FROM tareas a inner join categorias b on a.idcategoria = b.idcategoria;';
    $tareas = obtenerRegistros($sqlstr);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Listado de Tareas</title>
  </head>
  <body>
      <h1>Listado de Tareas</h1>
      <a href="05_ww_crud.php">Nuevo</a>
      <table>
          <tr>
              <th>
                  Tarea
              </th>
              <th>
                  Prioridad
              </th>
              <th>
                  Estado
              </th>
              <th>
                  Categoría
              </th>
              <th>
                  Acciones
              </th>
          </tr>
          <?php
          foreach($tareas as $tarea){
          echo '<tr><td>'.$tarea['tarea'].'</td>';
          echo '<td>'.$tarea["prioridad"].'</td>';
          echo '<td>'.$tarea["estado"].'</td>';
          echo '<td>'.$tarea["categoria"].'</td>';
          echo '<td><form action="05_ww_crud.php"';
          echo 'method="post"><input type="hidden"';
          echo 'name="idtarea" value="'.$tarea["idtarea"].'"/>';
          echo '<input type="hidden" name="action" value="UPD"/>';
          echo '<button type="submit" name="btnActualizar">Actualizar</button>';
          echo '</form><form action="05_ww_crud.php" method="post">';
          echo  '<input type="hidden" name="idtarea" value="'.$tarea["idtarea"].'"/>';
          echo '<input type="hidden" name="action" value="DEL"/>';
          echo '<button type="submit" name="btnEliminar"> Eliminar </button>';
          echo '</form></td></tr>';
            }
          ?>
      </table>
  </body>
</html>
