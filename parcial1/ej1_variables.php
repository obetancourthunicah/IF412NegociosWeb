<?php
  //Este es el primer ejemplo
  /* de los comentarios que podemos
  utilizar en php */
  $strEjemplo = "Hola Mundo";
  if(isset($_POST["txtMensaje"])){
      $strEjemplo = $_POST["txtMensaje"];
  }

  // Numerico, texto, boolean (true, false)
  // array , object
  // camello Hungaro \ Hungaro camello
/* ESTO ESTA PROHIBIDO
  $sharon = 1;
  $sharon2 = "Esto es un texto";
  $sharon3 = true;

//  ....... 10000 lineas adelante
  $sharon = "Variable temporal pq no";
*/
  $intEdad = 24;
  $strEdad = "Mayor";
  $esMayor = true;
  $i = 0 ; // iterador
  $fPrecio = 10.234;
  $iEdad = 10;
  $sEdad = "Menor";

  /// Operadores Aritméticos
  $operador1 = 1;
  $operador2 = 2;
  $numResultado = $operador1 + $operador2;
  $numResultado = $operador1 - $operador2;
  $numResultado = $operador1 * $operador2;
  $numResultado = $operador1 / $operador2; //operador <> 0
  $numResultado++;
  $numResultado--;
  $numResultado+=10;
  $numResultado*=10;
  $numResultado/=10;
  $numResultado = $numResultado**2; //Exponencial
  $numResultado = 7 % 3;
  $strEjemplo=$numResultado;



 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Variables</title>
  </head>
  <body>
    <h1><?php echo $strEjemplo; ?></h1>
    <form method="post" action="ej1_variables.php">
      <label for="txtMensaje">Mensaje</label>
      <input type="text" name="txtMensaje"
        id="txtMensaje" value="" />
        <input type="submit" value="Enviar"
          name="btnEnvias"/>
    </form>
  </body>
</html>
