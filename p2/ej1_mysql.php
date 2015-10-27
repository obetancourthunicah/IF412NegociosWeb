<?php
    //http://php.net/manual/es/book.mysqli.php
    //La Conexion 4 parametros
    $host = "127.0.0.1";
    $user = "root";
    $password = "root";
    $database = "nw201503";

    $conexion = new mysqli( $host,
                            $user,
                            $password,
                            $database);

    if($conexion->error){
        echo $conexion->error;
        die();
    }

    if(isset($_POST["btnSave"])){
        $txtRol = $_POST["txtRol"];
        $cmbEst = $_POST["rolEst"];
        $insStr = sprintf("INSERT INTO `roles` ( `rol`, `rolest`) VALUES ( '%s', '%s');",$txtRol,$cmbEst);
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
            <label>Rol</label>
            <input type="text"
                    name="txtRol"
                    id="txtRol"/>
            <br/>
            <label>Estado</label>
            <select name="rolEst">
                <option value="ACT">
                    Activo
                </option>
                <option value="INA">
                    Inactivo
                </option>
            </select>
            <br/>
            <input type="submit"
                value="Guardar"
                name="btnSave"/>
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
           </tr>

       <?php
            foreach($roles as $rol){
                echo "<tr><td>".$rol["idroles"];
                echo "</td><td>". $rol["rol"];
                echo "</td><td>". $rol["rolest"];
                echo "</td></tr>";
            }
       ?>
       </table>
   </body>
 </html>
