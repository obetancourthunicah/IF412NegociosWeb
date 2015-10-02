<?php
//En php para iniciar y acceder a las variables de sesión es
//requerido ejecutar el comando session_start(), este comando
//abrirá y obtendrá toda la información guardada en esa sesión.

    session_start();
    $sessionName = "";

    if(isset($_SESSION["username"])){
        $sessionName = $_SESSION["username"];
    }else{
        //usamos la funcion header para establecer encabezados en
        //la respuesta html que se retorna ,
        //la siguiente instrucción especifica obliga al browser
        //a redireccionarse a la página establecida.
        header("Location: 7_sesiones_php.php");
        //Como despues de manipular un header no se permite
        //agregar datos al contenido (con echo) se debe
        //forzar el finalizado de la ejecución del script
        //con la instrucción die();
        die();
    }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8"/>
     <title>Seciones en PHP 2</title>
   </head>
   <body>
       <h1>
           <?php echo $sessionName; ?>
       </h1>
   </body>
 </html>
