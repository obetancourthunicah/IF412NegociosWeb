<?php
    require_once('DAO/libdb.php');
    $tareas = obtenerRegistros('Select * from tareas;');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Trabajar con Tareas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <style>
        form{
            display: inline;
        }
    </style>
  </head>
  <body>
      <div class="container">
          <div class="row">


          <div class="col-sm-6 col-sm-offset-3 text-center">
              <h1>Trabajar con Tareas</h1>
          </div>
          </div>
          <div class="row">
              <div class="col-sm-1 col-sm-offset-10">
                  <a href="04_ww_crud.php" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span>Nuevo</a>
              </div>
          </div>
          <div class="row">
              <div class="col-sm-10 col-sm-offset-1">
                  <table class="table table-responsive table-stiped">
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
                          <th class="text-center">
                              Acciones
                          </th>
                      </tr>
                      <?php
                         foreach($tareas as $tarea){
                             echo '<tr><td>';
                             echo $tarea['tarea'];
                             echo '</td><td>';
                             echo $tarea['prioridad'];
                             echo '</td><td>';
                             echo $tarea['estado'];
                             echo '</td><td class="text-center">';
                             echo '<form action="04_ww_crud.php" method="post">';
                             echo '<input type="hidden" name="idtarea" value="';
                             echo $tarea['idtarea'];
                             echo '" /><input type="hidden" name="action" value="upd"/><button type="submit" value="upd" class="btn ';
                             echo 'btn-default" onclick="submit()"><span class="glyphicon glyphicon-pencil">';
                             echo '</span>Actualizar</button></form>';
                             echo '<form action="04_ww_crud.php" method="post">';
                             echo '<input type="hidden" name="idtarea" value="';
                             echo $tarea['idtarea'];
                             echo '" /><input type="hidden" name="action" value="del" />';
                             echo '<button type="submit"';
                             echo 'value="Submit" onclick="submit()" class="btn btn-default"><span ';
                             echo 'class="glyphicon glyphicon-trash"></span>Eliminar';
                             echo '</button></form></td></tr>';
                         }
                       ?>
                  </table>
              </div>
          </div>
      </div>

  </body>
</html>
