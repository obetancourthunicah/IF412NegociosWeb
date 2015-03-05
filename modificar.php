<?php
  $registros = array();
  $lasInsertID = 0;
   //Realizar la conexion con MySQL
    $conn = new mysqli("127.0.0.1", "root", "", "nw201501");
    if($conn->errno){
      die("DB no can: " . $conn->error);
    }
    
  if(isset($_POST["btnIns"])){
    $registro = array();
    $registro["ctgid"] = 0;
    $registro["ctgdsc"] = $_POST["txtDsc"];
    $registro["ctgest"] = $_POST["txtGest"];
 
   
    //Preparar el Insert Statement
    $sqlstr = "INSERT INTO `nw201501`.`categorias`(`ctgdsc`,`ctgest`)";
    $sqlstr .= "VALUES ('" . $registro["ctgdsc"]  . "',  '". $registro["ctgest"] ."');";
       
     //Ejecutar el Insert Statement
    $result = $conn->query($sqlstr);
    
    //Obtener el último codigo generado
    $lasInsertID= $conn->insert_id;
    
  }
  
   while($registro = $resulCursor->fetch_assoc()){
    $registros[] = $registro;
  }
  
  //Para modificar registros
    $codigo="";
  if(isset($_POST["btnMod"])){
    $codigo = $_POST["txtid"];
    $registrom = array();
    
    $registrom["ctgdsc"] = $_POST["txtDsc"];
    $registrom["ctgest"] = $_POST["txtGest"];
 
 
    
    $sqlstr = "UPDATE `nw201501`.`categorias` SET `ctgdsc` = '" .$registrom["ctgdsc"]. "' ,`ctgest`= '" .$registrom["ctgest"]. "'  where ctgid='" .$codigo."');";

       
    $result = $conn->query($sqlstr);

    $lasInsertID= $conn->insert_id;
  }
  
  
  
    //Obtener los registros de la tabla
     $sqlQuery  = "Select * from categorias;";
     $resulCursor = $conn->query($sqlQuery);
                                        //fetch: agarrar de ese cursor la posiciona actual del registro
                                        //y assoc el valor del registro asociativo
    while($registrom = $resulCursor->fetch_assoc()){
    $registros[] = $registrom;
  }
  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Mantenimiento de la tabla Categorías</title>
  </head>
  <body>
    <h1>Categorías</h1>
    <form action="modificar.php" method="POST">
         <label for="txtid">Código</label>
        <input type="text" name="txtid" id="txid" />
        <br/>
        <br/>
        <label for="txtDsc">Descripción</label>
        <input type="text" name="txtDsc" id="txtDsc" />
        <br/>
        <br/>
        <label for="txtGest">Gestión</label>
        <input type="text" name="txtGest" id="txtGest" />
        <br/>
        
        <br/>
        <input type="submit" name="btnIns" value="Guardar" />
        <input type="submit" name="btnMod" value="Modificar" />
    </form>
    <div>
      <h2>Datos</h2>
      <?php if($lasInsertID) echo "Último ID generado = $lasInsertID" ?>
      <table border="1">
        <tr>
          <th>Codigo</th>
          <th>Descripción</th>
          <th>Gestión</th>
        </tr>
      <?php
        if(count($registros) > 0){
          foreach($registros as $registro){
            echo "<tr><td>".$registro["ctgid"]."</td>";
            echo "<td>".$registro["ctgdsc"]."</td>";
            echo "<td>".$registro["ctgest"]."</td>";

          }
          }
          if(isset($_POST["btnMod"])){
          foreach($registros as $registrom){
            echo "<tr><td>".$registrom["ctgid"]."</td>";
            echo "<td>".$registrom["ctgdsc"]."</td>";
            echo "<td>".$registrom["ctgest"]."</td>";

          }
        }
        ?>
      </table>
    </div>
  </body>
</html>