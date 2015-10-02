<?php
  /*
    Ejemplo de como utilizar un arreglo para analizar
    las palabras que existes en un artículo.

    El siguiente algoritmo separará en un arreglo todas las
    palabras que sean ingresadas en un textarea, luego se
    sacará las palabras y se acumularán para obtener un listado
    sin palabras duplicados con la frecuencia de aparición de cada
    palabra.
  */
  $txtTexto ="";
  $resultado = "";
  $arregloTexto = array();

  if(isset($_POST["btnProcesar"])){
     //Se obtiene el texto completo del artículo ingresado
     //por el usuario
    $txtTexto = $_POST["txtTexto"];
    //Se convierte el text en un arreglo separando cada palabra
    //con el espacio como delimitador
    $arregloTexto = explode(" ",$txtTexto);

    //la function count($arreglo) devuelve el numero de elementos
    //que tiene un arreglo
    $resultado = "Numero de Palabras: " .
                  count($arregloTexto) . "<br/>";

    //Se inicia un arreglo vacío para ingresar la palabras y un contador
    //Se usará un arreglo asociativo para aprovechar la naturaleza única de
    //la llave asi no podrá contener el arreglo dos contadores para la misma
    //palabra
    $contadorArreglo = array();
    foreach($arregloTexto as $palabra){
      if(isset($contadorArreglo[$palabra])){
        $contadorArreglo[$palabra] ++;
      }else{
        $contadorArreglo[$palabra] = 1;
      }
    }
    //Usamos la funcion arsort que ordena de forma descendete los valores
    //del arreglo manteniendo la definición de las llaves. Asi el primer elementos
    //será la palabra con mayor frecuencia.

    arsort($contadorArreglo);
    $resultado .= "Numero Palabras únicas: " .
                  count($contadorArreglo) . "<br/>";
    foreach($contadorArreglo as $palabra => $conteo){
        $resultado .= "La palabra <b>". $palabra
                    . "</b> es la de mayor frecuecia con "
                    . $conteo . " repeticiones.";
        //Solo se hace una iteración una vez usamos el break para interumpir
        //el ciclo for.
        break;
    }
  }

  //La linea 71 tiene un comentario interezante!!!!
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
    <form action="6_1_analisis_texto.php" method="post">
      <lable for="txtTexto">Texto</lable><br/>
      <!-- Observen que el valor del textarea ya está definido por
           una variable en php, observe la linea 12, y la linea 19
           asi el formulario no regresa vacío devuelta al procesar
           el post.
       -->
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
