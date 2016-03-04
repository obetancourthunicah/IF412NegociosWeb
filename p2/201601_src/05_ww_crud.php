<?php
    require_once('DAO/libdb.php');
    $modo = "INS";
    $idtarea = 0;
    $txtTarea = "";
    $cmbPrioridad = "media";
    $cmbEstado = "PND";
    $idcategoria = 1;
    $categorias = obtenerRegistros('select * from categorias;');

    if(isset($_POST["btnGuardar"])){
        $txtTarea = $_POST["txtTarea"];
        $cmbPrioridad = $_POST["cmbPrioridad"];
        $cmbEstado = $_POST["cmbEstado"];
        $idcategoria = $_POST["cmbcategoria"];
        $sqlinsert= "insert into tareas (tarea,prioridad,estado,idcateoria) value ('%s','%s','%s',%d);";
        $sqlinsert = sprintf($sqlinsert,
                        $txtTarea,
                        $cmbPrioridad,
                        $cmbEstado,
                        $idcategoria
                    );
        if(ejecutarNonQuery($sqlinsert)){
            echo '<script>alert("Tarea Guardada Exitosamente!");';
            echo 'window.location.assign("05_ww_list.php");</script>';
        }
    }

    if(isset($_POST["btnUpdate"])){
        $idtarea = $_POST["idtarea"];
        $txtTarea = $_POST["txtTarea"];
        $cmbPrioridad = $_POST["cmbPrioridad"];
        $cmbEstado = $_POST["cmbEstado"];
        $idcategoria = $_POST["cmbcategoria"];

        $updateSql = "update tareas set tarea='%s', prioridad='%s', estado='%s', idcategoria=%d where idtarea=%d;";
        $updateSql = sprintf($updateSql,
                             $txtTarea,
                             $cmbPrioridad,
                             $cmbEstado,
                             $idcategoria,
                             $idtarea
                            );
        if(ejecutarNonQuery($updateSql)){

            echo '<script>alert("Tarea Actualizada Exitosamente!");';
            echo 'window.location.assign("05_ww_list.php");</script>';

        }
    }

    if(isset($_POST["btnDelete"])){
        $idtarea = $_POST["idtarea"];

        $deleteSql = "delete from tareas where idtarea=%d;";
        $deleteSql = sprintf($deleteSql,
                             $idtarea
                            );
        if(ejecutarNonQuery($deleteSql)){

            echo '<script>alert("Tarea Eliminada Exitosamente!");';
            echo 'window.location.assign("05_ww_list.php");</script>';

        }
    }



    if(isset($_POST['action'])){
        $modo = $_POST['action'];
        $getSql="select  * from tareas where idtarea = %d;";
        $getSql = sprintf($getSql, $_POST["idtarea"]);
        $tarea = obtenerUnRegistro($getSql);
        $txtTarea = $tarea["tarea"];
        $cmbPrioridad = $tarea["prioridad"];
        $cmbEstado = $tarea["estado"];
        $idtarea = $tarea["idtarea"];
        $idcategoria = $tarea["idcategoria"];
    }

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8"/>
     <title>Gestion de Tarea</title>
   </head>
   <body>
      <?php
         if($modo=="INS"){
             echo '<h1>Nuevo Registro</h1>';
         }else{
             echo '<h1>Trabajar con: '. $txtTarea .'</h1>';
         }
       ?>

     <form action="05_ww_crud.php" method="post">

      <input type="hidden" name="idtarea"
        value="<?php echo $idtarea;?>"/>
        <input type="hidden" name="action"
          value="<?php echo $modo;?>"/>
     <table style="width:100%;">
         <tr>
             <th>
                 Tarea
             </th>
             <td>
                 <input type="text" name="txtTarea"
                    placeholder="Tarea" value="<?php echo $txtTarea; ?>"
                    id="txtTarea"/>
             </td>
         </tr>
         <tr>
             <th>
                 Prioridad
             </th>
             <td>
                 <select name="cmbPrioridad">
                    <option value="alta"
                        <?php echo ($cmbPrioridad=="alta")?"selected":""; ?>
                        >
                        Alta
                    </option>
                    <option value="media"
                        <?php echo ($cmbPrioridad=="media")?"selected":""; ?>
                    >
                        Normal
                    </option>
                    <option value="baja"
                        <?php echo ($cmbPrioridad=="baja")?"selected":""; ?>
                    >
                        Baja
                    </option>
                 </select>
             </td>
         </tr>
         <tr>
             <th>
                 Estado
             </th>
             <td>
                 <select name="cmbEstado">
                    <option value="PND"
                        <?php echo ($cmbEstado=="PND")?"selected":""; ?>
                    >
                        Pendiente
                    </option>
                    <option value="CMP"
                        <?php echo ($cmbEstado=="CMP")?"selected":""; ?>
                    >
                        Completado
                    </option>
                 </select>
             </td>
         </tr>
         <tr>
             <th>
                 Estado
             </th>
             <td>
                 <select name="cmbcategoria">
                     <?php
                     foreach($categorias as $cat){
                        echo '<option value="'.$cat["idcategoria"].'"';
                        if($cat["idcategoria"] == $idcategoria){
                            echo " selected ";
                        }
                        echo '>'.$cat["categoria"].'</option>';
                     }
                    ?>
                 </select>
             </td>
         </tr>
         <tr>
             <td colspan="2" style="text-align:right;">
                 <?php if($modo=="INS"){ ?>
                 <input type="submit"
                    name="btnGuardar"
                    value="Guardar"/>
                <?php } // fin INS?>

                <?php if($modo=="UPD"){ ?>
                <input type="submit"
                   name="btnUpdate"
                   value="Actualizar"/>
                 <?php } // fin UPD?>

                <?php if($modo=="DEL"){ ?>
               <input type="submit"
                  name="btnDelete"
                  value="Eliminar"/>
                <?php } // fin DEL?>
                <a href="05_ww_list.php">Cancelar</a>
             </td>

         </tr>

     </table>
     </form>
   </body>
 </html>
