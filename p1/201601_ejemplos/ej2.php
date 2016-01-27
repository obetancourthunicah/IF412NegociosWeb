<?php
    //Los mismo comentario de C
    /*comentario
    de multiple linea */

    $estoEsUnaVariable = "Hola Mundo";

    $intEdad = 0;
    $dblSalario= 100.03;
    $strNombre = 'Algun Nombre';
    //$str_nombre  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Ejercicio 1 PHP</title>
  </head>
  <body>
    <h1>Ejecicio Declaracion de Variables</h1>
    <b>Como imprimir variables con
    código PHP Embedido</b><br/>
    <?php echo "<h1>".$estoEsUnaVariable."</h1>"; ?>
    <h1><?php echo $estoEsUnaVariable; ?></h1>
  </body>
</html>
