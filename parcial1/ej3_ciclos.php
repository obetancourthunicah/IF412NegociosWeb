<?php
  $txtMensaje = "";
  $resultado = "";
  $cmbIternaciones = 5;

  if(isset($_POST["btnEnviar"])){
    $txtMensaje = $_POST["txtMensaje"];
    $cmbIternaciones = intval($_POST["cmbIteraciones"]);
    $resultado = "<ol>";
    for($i = 0; $i < $cmbIternaciones; $i++){
      $resultado .= "<li>".$txtMensaje."</li>";
    }
    /*
    while(expression){

    }
    do{

    }while(expresssion)
    */
    $resultado .=  "</ol>";
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo de Ciclos en PHP</title>
  </head>
  <body>
    <form action="ej3_ciclos.php" method="post">
      <input type="text" id="txtMensaje"
        name="txtMensaje" value="<?php echo $txtMensaje ?>"
        /><br />
        <select id="cmbIteraciones" name="cmbIteraciones">
            <option value="5" <?php echo ($cmbIternaciones == 5)?"selected":""; ?> >5</option>
            <option value="15" <?php echo ($cmbIternaciones == 15)?"selected":""; ?>>15</option>
            <option value="25" <?php echo ($cmbIternaciones == 25)?"selected":""; ?>>25</option>
            <option value="35" <?php echo ($cmbIternaciones == 35)?"selected":""; ?>>35</option>
            <option value="45" <?php echo ($cmbIternaciones == 45)?"selected":""; ?>>45</option>
        </select><br/>
        <input type="submit" name="btnEnviar" value="Iterar" />
    </form>
    <div>
      <?php
        echo $resultado;
      ?>
    </div>
  </body>
</html>
