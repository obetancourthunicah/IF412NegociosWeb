<?php
  $int1 = 0;
  $int2 = 0;
  $int3 = 0;
  $int4 = 0;
  $int5 = 0;
  $int6 = 0;
  $int7 = 0;
  $int8 = 0;
  $int9 = 0;
  $int10 = 0;

  $resultado = "";
  $opr = "";
  if(isset($_POST["btnExe"])){
    $int1 = intval($_POST["int1"]);
    $int2 = intval($_POST["int2"]);
    $int3 = intval($_POST["int3"]);
    $int4 = intval($_POST["int4"]);
    $int5 = intval($_POST["int5"]);
    $int6 = intval($_POST["int6"]);
    $int7 = intval($_POST["int7"]);
    $int8 = intval($_POST["int8"]);
    $int9 = intval($_POST["int9"]);
    $int10 = intval($_POST["int10"]);
    $opr = $_POST["opr"];

    switch($opr){
      case "sum":
        $resultado = $int1 + $int2 + $int3 + $int4 + $int5 + $int6 + $int7 + $int8 + $int9 + $int10;
        break;
      case "mult":
      $resultado = $int1 * $int2 * $int3 * $int4 * $int5 * $int6 * $int7 * $int8 * $int9 * $int10;
        break;
      case "asc":
          $resultado = array($int1 , $int2 , $int3 , $int4 , $int5, $int6,  $int7 , $int8 , $int9 , $int10);
          sort($resultado);
        break;
      case "desc":
        $resultado = array($int1 , $int2 , $int3 , $int4 , $int5, $int6,  $int7 , $int8 , $int9 , $int10);
        rsort($resultado);
        break;
    }


  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Examen Ejercicio 1</title>
  </head>
  <body>
    <h1>Ejercicio 1</h1>
    <form action="exa1.php" method="post">
        <label for="int1" >Número 1</label>
        <input type="text" id="int1" name="int1" />
        <br/>
        <label for="int2" >Número 2</label>
        <input type="text" id="int2" name="int2" />
        <br/>
        <label for="int3" >Número 3</label>
        <input type="text" id="int3" name="int3" />
        <br/>
        <label for="int4" >Número 4</label>
        <input type="text" id="int4" name="int4" />
        <br/>
        <label for="int5" >Número 5</label>
        <input type="text" id="int5" name="int5" />
        <br/>
        <label for="int6" >Número 6</label>
        <input type="text" id="int6" name="int6" />
        <br/>
        <label for="int7" >Número 7</label>
        <input type="text" id="int7" name="int7" />
        <br/>
        <label for="int8" >Número 8</label>
        <input type="text" id="int8" name="int8" />
        <br/>
        <label for="int9" >Número 9</label>
        <input type="text" id="int9" name="int9" />
        <br/>
        <label for="int10" >Número 10</label>
        <input type="text" id="int10" name="int10" />
        <br/>
        <label for="opr">Acción</label><br/>
        <select id="opr" name="opr">
          <option value="sum">Sumar</option>
          <option value="mult">Multiplicar</option>
          <option value="asc">Ordenar de Menor a Mayor</option>
          <option value="desc">Ordenar de Mayor a Menor</option>
        </select>
      <br/>
      <input type="submit" name="btnExe" id="btnExe" value="Procesar" />
    </form>

    <div>
      <?php
        if($opr != ""){
          echo "<b>Valores:</b> ";
          echo $int1. ", ";
          echo $int2. ", ";
          echo $int3. ", ";
          echo $int4. ", ";
          echo $int5. ", ";
          echo $int6. ", ";
          echo $int7. ", ";
          echo $int8. ", ";
          echo $int9. ", ";
          echo $int10;
          echo "<br/><b>Operación:</b>";
          switch($opr){
            case "sum":
              echo "Sumar";
              break;
            case "mult":
              echo "Multiplicar";
              break;
            case "asc":
              echo "Ordenar de Menor a Mayor";
              break;
            case "desc":
              echo "Ordenar de Mayor a Menor";
              break;
          }
          echo "<br/><b>Resultado:</b>";
          if(!is_array($resultado)){
            echo $resultado;
          }else{
            foreach($resultado as $num){
              echo $num .", ";
            }
          }
        }
      ?>
    </div>
  </body>
</html>
