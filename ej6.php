<?php
  $registros = array();

  if(isset($_POST["btnIns"])){
    $registro = array();
    $registro["codigo"] = 0;
    $registro["descripcion"] = $_POST["txtDsc"];
    $registro["lugar"] = $_POST["txtLgr"];
    $registro["fecha"] = $_POST["txtFch"];
    $registro["contactemail"] = $_POST["txtCrr"];
    $registro["status"] = $_POST["txtSts"];

    //Realizar la conexion con MySQL
    $conn = new mysqli("127.0.0.1", "root", "root", "nw201501");
    if($conn->errno){
      die("DB no can: " . $conn->error);
    }
    //Preparar el Insert Statement
    $sqlstr = "INSERT INTO `charlas` ( `descripcion`, `lugar`, `fecha`, `contactemail`, `status`)";
    $sqlstr .= "VALUES ( '". $registro["descripcion"] ." ' , '" . $registro["lugar"]  . "', '". $registro["fecha"] ."', '" . $registro["contactemail"] . "', '". $registro["status"] ."');";

    //Ejecutar el Insert Statement
    $result = $conn->query($sqlstr);

    //Obtener el último codigo generado

    //Obtener los registros de la tabla
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Primer Formulario con MySQL Backend</title>
  </head>
  <body>
    <h1>Charlas</h1>
    <form action="ej6.php" method="POST">
        <label for="txtDsc">Descripción</label>
        <input type="text" name="txtDsc" id="txtDsc" />
        <br/>
        <label for="txtLgr">Lugar</label>
        <input type="text" name="txtLgr" id="txtLgr" />
        <br/>
        <label for="txtFch">Fecha</label>
        <input type="date" name="txtFch" id="txtFch" />
        <br/>
        <label for="txtCrr">Correo de Contacto</label>
        <input type="email" name="txtCrr" id="txtCrr" />
        <br/>
        <label for="txtSts">Estado</label>
        <select name="txtSts" id="txtSts">
            <option value="PND">Pendiente</option>
            <option value="CNF">Confirmado</option>
            <option value="CNL">Cancelado</option>
        </select>
        <br/>
        <input type="submit" name="btnIns" value="Grabar" />
    </form>
    <div>
      <h2>Datos</h2>
      <table>
        <tr>
          <th>Codigo</th>
          <th>Descripción</th>
          <th>Lugar</th>
          <th>Fecha</th>
          <th>Correo</th>
          <th>Estado</th>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>
    </div>
  </body>
</html>
