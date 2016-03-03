<?php
    require_once('DAO/libdb.php');
    $modo = "ins";
    $tarea = array();

    $tareastr = "";
    $prioridad = "alta";
    $estado = "PND";


    if(isset($_POST['action'])){
        $sqlstr = "select * from tareas where idtarea=%d;";

        $sqlstr = sprintf($sqlstr, $_POST['idtarea']);
        $tarea = obtenerUnRegistro($sqlstr);

        $tareastr = $tarea['tarea'];
        $prioridad = $tarea['prioridad'];
        $estado = $tarea['estado'];

        switch ($_POST['action']) {
            case 'upd':
                $modo="upd";
                break;
            case 'del':
                $modo="del";
                # code...
                break;
        }
    }
    if(isset($_POST['btnUpdate'])){
        $updatstr = "update tareas set estado='%s' , tarea = '%s' , prioridad= '%s' where idtarea=%d";
        $updatstr = sprintf($updatstr,
                                $_POST['estado'],
                                $_POST['txttarea'],
                                $_POST['prioridad'],
                                $_POST['idtarea']
                            );


        if(ejecutarNonQuery($updatstr)){
            header('location:04_ww_list.php');
            die();
        }

        $estado = $_POST['estado'];
        $tareastr = $_POST['txttarea'];
        $prioridad = $_POST['prioridad'];
    }
    if(isset($_POST['btnInsert'])){

    }
    if(isset($_POST['btnDelete'])){

    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Trabajar con Tarea</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                  <div class="row">
                      <h1><?php echo ($modo=="ins")?"Nueva Tarea": $tarea['tarea']; ?></h1>
                  </div>
                  <form action ="04_ww_crud.php" method="post">
                      <?php
                            if($modo != "ins"){
                                echo '<input type="hidden" name="idtarea" value="'.$_POST["idtarea"].'" />';
                            }
                       ?>
                      <div class="row">
                          <div class="col-sm-4">
                              <label>Tarea</label>
                          </div>
                          <div class="col-sm-8">
                               <input  class="form-control" type="text" name="txttarea" value="<?php echo $tareastr; ?>" placeholder="Tarea" />
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-4">
                              <label>Prioridad</label>
                          </div>
                          <div class="col-sm-8">
                               <select name="prioridad" class="form-control">
                                   <option value="alta" <?php echo ($prioridad == "alta")?"selected":""; ?>>Alta</option>
                                   <option value="media" <?php echo ($prioridad == "media")?"selected":""; ?>>Media</option>
                                   <option value="baja" <?php echo ($prioridad == "baja")?"selected":""; ?>>Baja</option>
                               </select>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-4">
                              <label>Estado</label>
                          </div>
                          <div class="col-sm-8">
                              <select name="estado"  class="form-control">
                                  <option value="PND" <?php echo ($estado == "PND")?"selected":""; ?>>Pendiente</option>
                                  <option value="CMP" <?php echo ($estado == "CMP")?"selected":""; ?>>Completado</option>
                              </select>
                          </div>
                      </div>
                      <div class="row">
                          <br/>
                          <div class="col-sm-12 text-right">
                              <?php
                                if($modo=="upd") echo '<input class="btn btn-success"  type="submit" name="btnUpdate" value="Actualizar" />';
                                if($modo=="ins") echo '<input  class="btn btn-success" type="submit" name="btnInsert" value="Guardar" />';
                                if($modo=="del") echo '<input  class="btn btn-success" type="submit" name="btnDelete" value="Eliminar" />';
                               ?>
                               <a href="04_ww_list.php" class="btn btn-danger">Cancelar</a>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </body>
</html>
