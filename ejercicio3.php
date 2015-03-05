<?php
 
  session_start();
  function nuevaInformacion($informa){
    $informaciones = array();
 
    
    if(isset($_SESSION["informaciones"])){
      $informaciones = $_SESSION["informaciones"];
    }
    $hasChanged= false;
    foreach($informaciones as $informacion => $contador){
      if($informacion == $informa){
        $contador ++;
        $hasChanged = true;
        $informaciones[$informacion] = $contador;
      }
    }
    if(!$hasChanged){
      $informaciones[$informa] = 1;
    }
    $_SESSION["informaciones"] = $informaciones;
  }
  
  
  
  
  
  if(isset($_POST["btnAgregar"])){
    nuevaInformacion($_POST["txt1"]);
  

  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Tabla de Información</title>
  </head>
  <body>
    <h1>Ejercicio 3 de Examen</h1>
    <form action="ejercicio3.php" method="POST" >
      <label for="txt1">Nombre </label>
      <input type="text" name="txt1"
        id="txt1" value="" /><br/><br/>

      
      <input type="submit" name="btnAgregar"
        id="btnAgregar" value="Nuevo" />
    </form>
    <br/><br/><br/>
 
    <h1>Datos persistentes en la sesión </h1>
      <table border="1">
        <tr><th>Nombre</th></tr>
        <?php
          if(isset($_SESSION["informaciones"])){
            foreach($_SESSION["informaciones"] as $informacion => $Contador){
              echo "<tr><td>" . $informacion . "</td>";
            }
          }
        ?>
      </table>
  </body>
</html>