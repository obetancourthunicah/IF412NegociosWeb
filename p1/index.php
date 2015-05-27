<?PHP
  //Comentario de Una linea
  /*
  Comentario de
  multiples lineas
  */
  //Declaramos una variable
  // y le asignamos un texto

  $txtHolaMundo = "Hola Mundo";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Primer Programa en PHP</title>
  </head>
  <body>
    <h1>
      <?PHP
        //usamos la función echo
        //para imprimir cualquier
        //valor de variable
        //excepto: arreglos, objetos
        echo $txtHolaMundo;
      ?>
    </h1>

  </body>
</html>
