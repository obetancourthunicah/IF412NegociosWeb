<?php
  $txtTexto ="";
  $resultado = "";
  $arregloTexto = array();

  if(isset($_POST["btnProcesar"])){
    $txtTexto = $_POST["txtTexto"];
    $arregloTexto = explode(" ",$txtTexto);
    $resultado = "Numero de Palabras: " .
                  count($arregloTexto) . "<br/>";
    $contadorArreglo = array();
    foreach($arregloTexto as $palabra){
      if(isset($contadorArreglo[$palabra])){
        $contadorArreglo[$palabra] ++;
      }else{
        $contadorArreglo[$palabra] = 1;
      }
    }
    arsort($contadorArreglo);
    $resultado .= "Numero Palabras únicas: " .
                  count($contadorArreglo) . "<br/>";
    foreach($contadorArreglo as $palabra => $conteo){
        $resultado .= "La palabra <b>". $palabra
                    . "</b> es la de mayor frecuecia con "
                    . $conteo . " repeticiones.";
        break;
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Analisis de Texto con PHP y Arreglos</title>
  </head>
  <body>
    <h1>Analisis de Texto con Arreglos</h1>
    <h2>Texto a analizar</h2>
    <form action="analisisTextoArreglo.php" method="post">
      <lable for="txtTexto">Texto</lable><br/>
      <textarea name="txtTexto" id="txtTexto"
        placeholder="Ingrese el texto"><?php echo $txtTexto;?></textarea>

      <br/>
      <input type="submit" id="btnProcesar"
        name="btnProcesar" value="Procesar"/>
    </form>
    <hr/><h2>Resultado</h2>
    <div>
      <?php
        echo $resultado;
      ?>
    </div>
  </body>
</html>
