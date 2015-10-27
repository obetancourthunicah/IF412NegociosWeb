<?php
    //http://php.net/manual/es/book.mysqli.php
    //La Conexion 4 parametros
    $host = "127.0.0.1";
    $user = "root";
    $password = "studentpwd";
    $database = "nw201503";
    $selid = "";
    $roltxt = "";
    $rolest = "ACT";

    $conexion = new mysqli( $host,
                            $user,
                            $password,
                            $database);

    if($conexion->error){
        echo $conexion->error;
        die();
    }

    if(isset($_GET["selid"])){
      $selid=$_GET["selid"];
      $sqlOneStr = sprintf("select * from roles where idroles=%d;",$selid);
      $cursorOne = $conexion->query($sqlOneStr);
      if($cursorOne){
        $selRol = $cursorOne->fetch_assoc();
        $roltxt = $selRol["rol"];
        $rolest = $selRol["rolest"];
      }
    }

    if(isset($_POST["btnSave"])){
        $txtRol = $_POST["txtRol"];
        $cmbEst = $_POST["rolEst"];
        $insStr = sprintf("INSERT INTO `roles` ( `rol`, `rolest`) VALUES ( '%s', '%s');",$txtRol,$cmbEst);
        if(!$conexion->query($insStr)){
            die($conexion->error);
        }
    }
    if(isset($_POST["btnUpdate"])){
        $selid = $_POST["selid"];
        $txtRol = $_POST["txtRol"];
        $cmbEst = $_POST["rolEst"];
        $insStr = sprintf("UPDATE `roles` set `rol` = '%s', `rolest` = '%s' where idroles=%d;",$txtRol,$cmbEst,$selid);
        if(!$conexion->query($insStr)){
            die($conexion->error);
        }
    }


    $sqlstr = "select * from roles;";

    $cursor = $conexion->query($sqlstr);
    $roles = array();
    if($cursor){
        foreach($cursor as $rol){
            $roles[]=$rol;
        }
    }
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8"/>
     <title>Uso de MYsqlI Básico</title>
   </head>
   <body>
       <h1>Mantenimiento de Roles</h1>
       <form action="ej1_mysql.php"
            method="post">
            <input type="hidden" name="selid"
                value="<?php echo $selid; ?>"
                />
            <label>Rol</label>
            <input type="text"
                    name="txtRol"
                    id="txtRol"
                     value="<?php echo $roltxt?>"/>
            <br/>
            <label>Estado</label>
            <select name="rolEst">
                <option value="ACT" <?php echo ($rolest=="ACT")?"selected":""; ?>>
                    Activo
                </option>
                <option value="INA" <?php echo ($rolest=="INA")?"selected":""; ?>>
                    Inactivo
                </option>
            </select>
            <br/>
            <?php if($selid==""){ ?>
            <input type="submit"
                value="Guardar"
                name="btnSave"/>
            <?php }else{ ?>
            <input type="submit"
                value="Actualizar"
                name="btnUpdate"/>
            <?php } ?>
        </form>
        <hr/>
       <table width="60%" border="1">
           <tr>
               <th>
                   Código
               </th>
               <th>
                   Rol
               </th>
               <th>
                   Estado
               </th>
               <th> Acciones </th>
           </tr>

       <?php
            foreach($roles as $rol){
                echo "<tr><td>".$rol["idroles"];
                echo "</td><td>". $rol["rol"];
                echo "</td><td>". $rol["rolest"];
                echo '</td><td><a href="ej1_mysql.php?selid='. $rol["idroles"].'">Actualizar</a>';
                echo "</td></tr>";
            }
       ?>
       </table>
   </body>
 </html>
