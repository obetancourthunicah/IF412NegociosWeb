<?php
  //para inicia la session
  session_start();
  function addNoCuenta($numCuenta){
    $cuentas = array();
    if(isset($_SESSION["Cuentas"])){
      $cuentas = $_SESSION["Cuentas"];
    }
    $hasChanged= false;
    foreach($cuentas as $cuenta => $contador){
      if($cuenta == $numCuenta){
        $contador ++;
        $hasChanged = true;
        $cuentas[$cuenta] = $contador;
      }
    }
    if(!$hasChanged){
      $cuentas[$numCuenta] = 1;
    }
    $_SESSION["Cuentas"] = $cuentas;
  }
  if(isset($_POST["btnAdd"])){
    addNoCuenta($_POST["txt1"]);
    addNoCuenta($_POST["txt2"]);
    addNoCuenta($_POST["txt3"]);
    addNoCuenta($_POST["txt4"]);
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Ejemplo PHP Sessiones 2</title>
  </head>
  <body>
    <h1>Ejercicio de Formulario Acumulado</h1>
    <form action="a.php" method="POST" >
      <label for="txt1">Cuenta 1</label>
      <input type="text" name="txt1"
        id="txt1" value="" /><br/>
      <label for="txt2">Cuenta 2</label>
      <input type="text" name="txt2"
        id="txt2" value="" /><br/>
      <label for="txt3">Cuenta 3</label>
      <input type="text" name="txt3"
        id="txt3" value="" /><br/>
      <label for="txt4">Cuenta 4</label>
      <input type="text" name="txt4"
        id="txt4" value="" /><br/>
      <input type="submit" name="btnAdd"
        id="btnAdd" value="Agregar" />
    </form>
    <a href="b.php" target="_blank">
        Ir a Ver Resultados
    </a>
  </body>
</html>
