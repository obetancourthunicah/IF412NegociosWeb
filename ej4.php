<?php
  $result = "";
  $txtOrg = "";
  // +3 Elia
  if(isset($_POST["btnPrc"])){
    $txtOrg = strtolower($_POST["txtOrg"]);
    $txtOrg = str_replace("."," ",$txtOrg);
    $txtOrg = str_replace(","," ",$txtOrg);
    $txtOrg = str_replace("?"," ",$txtOrg);
    $txtOrg = str_replace("!"," ",$txtOrg);
    $txtOrg = str_replace("¿","",$txtOrg);
    $txtOrg = str_replace("¡","",$txtOrg);
    $txtOrg = str_replace("  "," ",$txtOrg);

    //preg_replace remplazar mendiante expresiones
    //regulares
    $arregloPalabras = explode(" ", $txtOrg);
    $arregloFrecuencias  = array();

    foreach($arregloPalabras as $palabra){
      if(isset($arregloFrecuencias[$palabra])){
        $arregloFrecuencias[$palabra] ++;
      }else{
        $arregloFrecuencias[$palabra] = 1;
      }
    }

    if(is_array($arregloFrecuencias)
        && count($arregloFrecuencias) > 0 ){

          arsort($arregloFrecuencias);

          foreach($arregloFrecuencias as $palabrak=>$freq){
            $result = "La palabra << $palabrak >> con mayor frecuencia de : $freq";
            break;
          }

    }else{
      $result="No hay palabras que analizar";
    }

    //associative reverse sort

    //asort();
    //associative sort
    //para depuracion
    //print_r($arregloFrecuencias);
    //die();

  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Ejemplo de Uso de Arreglos Xtreme</title>
    <meta charset="utf-8"/>
  </head>
  <body>
    <h1>Stats de Blogs</h1>
    <form action="ej4.php" method="POST">
      <label for="txtOrg">Texto de un Blog</label>
      <br/>
      <textarea id="txtOrg" name="txtOrg">
        <?php echo $txtOrg; ?>
      </textarea>
      <br/>
      <input type="submit" id="btnPrc"
        name="btnPrc" value="Procesar" />
      </form>
    <div>
        <?php echo $result; ?>
    </div>
  </body>
</html>
