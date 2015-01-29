<?php
  $numero1 = 0;
  $numero2 = 0;
  $iteraciones = 10;
  $msg = "";
  if(isset($_POST["iteraciones"]))
    $iteraciones = intval($_POST["iteraciones"]);

  if(isset($_POST["btnPrc"])){
    // numero1 ^ numero2
    $numero1 = intval($_POST["numero1"]);
    $numero2 = intval($_POST["numero2"]);
    $newValue = $numero1;
    for($i = 0; $i<$numero2-1; $i++){
      $newValue *= $numero1;
    }
    $msg = "El valor: $numero1 a la potencia $numero2 es igual a $newValue";
  }
  if(isset($_POST["btnRev"])){
    $numero1 = intval($_POST["numero1"]);

    $contador = 1;
    while($iteraciones > 0){
      $msg .= "$contador ). Producto: " . ($numero1 * $iteraciones) . " </br>";
      $contador ++;
      $iteraciones --;
    }
    $iteraciones = intval($_POST["iteraciones"]);
    // echo numero1 * iteracion --
  }
  if(isset($_POST["btnFac"])){
    // fatorial numero2
    $result = 1;
    $numero2 = intval($_POST["numero2"]);
    if($numero2>0){
      $cicle = $numero2;
      while($cicle >= 1){
        $result *= $cicle;
        $cicle --;
      }
    }
    $msg = "El factorial de $numero2 es $result";
  }


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charet="utf-8"/>
    <title>Ejercicio 2 Switch y Ciclos</title>
  </head>
  <body>
    <h1>Ejemplo de Switch y Ciclos en PHP</h1>
    <form action="ej2.php" method="post">
        <label for="numero1">Número 1</label>
        <input type="text" id="numero1"
          name="numero1"
          value="<?php echo $numero1; ?>" />
        <br/>
        <label for="numero2">Número 2</label>
        <input type="text" id="numero2"
        name="numero2"
        value="<?php echo $numero2; ?>" />
        <br/>
        <label for="iteraciones">Número de Iteraciones</label>
        <select name="iteraciones" id="iteraciones">
          <option value="10" <?php echo ($iteraciones==10)? 'selected="selected"':''; ?>>10</option>
          <option value="20" <?php echo ($iteraciones==20)? 'selected="selected"':''; ?>>20</option>
          <option value="50" <?php echo ($iteraciones==50)? 'selected="selected"':''; ?>>50</option>
        </select>
        <br/>
        <input type="submit" value="Procesar"
          name="btnPrc" id="btnPrc" />
        <input type="submit" value="Reversar"
          name="btnRev" id="btnRev" />
        <input type="submit" value="Factorial"
          name="btnFac" id="btnFac" />
    </form>
    <div>
        <?php echo $msg; ?>
    </div>
  </body>
</html>
