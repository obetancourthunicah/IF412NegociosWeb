<?php
    require_once('DAO/libdb.php');
    $tarea = '';
    $prioridad = 'baja';

    if(isset($_POST['btnSubmit'])){
        $tarea  = $_POST['txtTarea'];
        $prioridad = $_POST['optPrioridad'];

        $insertSql = "INSERT INTO `tareas`(`tarea`,`prioridad`) VALUES ('%s','%s');";
        $insertSql = sprintf($insertSql,$tarea,$prioridad);

        if(ejecutarNonQuery($insertSql)){
            $tarea = '';
            $prioridad = 'baja';
        }

    }

    if(isset($_POST['btnComplete'])){
        $id = $_POST['idTarea'];
        $updateQuery = "update tareas set estado = 'CMP' where idtarea=%d;";
        $updateQuery = sprintf($updateQuery,$id);
        if(ejecutarNonQuery($updateQuery)){
            
        }
    }

    $tareas = obtenerRegistros('Select * from tareas;');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Gestor de Tareas</title>
  </head>
  <body>
    <h1>Gestor de Tareas</h1>
    <form action="03_formulario_mysql.php"
        method="post">
        <input type="text" name="txtTarea"
            placeholder="Nueva Tarea" id="txtTarea"
            value="<?php echo $tarea; ?>"/>
        <br/>
        <select name="optPrioridad" id="Prioridad">
            <option value="alta"
                <?php echo ($prioridad === 'alta')?'selected':''; ?>
            >
                Alta
            </option>
            <option value="normal"
                <?php echo ($prioridad === 'normal')?'selected':''; ?>
            >
                Normal
            </option>
            <option value="baja"
                <?php echo ($prioridad === 'baja')?'selected':''; ?>
            >
                Baja
            </option>
        </select>
        <br/>
        <input type="submit" name="btnSubmit"
            value="guardar" />
    </form>

    <hr/>
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
                Marcar
            </th>
        </tr>
        <?php
            foreach($tareas as $tarea){
                echo '<tr>';
                echo '<td>'.$tarea['tarea'].'</td>';
                echo '<td>'.$tarea['prioridad'].'</td>';
                echo '<td>'.$tarea['estado'].'</td>';
                echo '<td><form action="03_formulario_mysql" method="post">';
                echo '<input type="hidden" name="idTarea" value="'.$tarea['idtarea'].'" />';
                echo '<input type="submit" name="btnComplete" value="Marcar" /> ';
                echo '</form></td>';
                echo '</tr>';
            }
        ?>
    </table>
  </body>
</html>
