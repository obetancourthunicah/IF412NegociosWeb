<?php

session_start();
$_SESSION["username"]= "usuario";
//$_SESSION["click"] ++;



$contenidoSession = "";
function agregarSession($dato){
    global $contenidoSession;
    $contenidoSession = "gean";
  return   "AS contenido:" . $dato;
}

function eliminarSession($dato){
   return  "Es contenido: ". $dato; 
}


if(isset($_SESSION["click"])){
if(isset($_POST["btnAdd"])){
   $contenidoSession .= agregarSession($_POST["txtData"]);
$_SESSION["click"] ++;
}


if(isset($_POST["btnSubs"])){
    $contenidoSession = eliminarSession($_POST["txtData"]);
$_SESSION["click"] ++;
}
}


?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <title> Funciones y Session</title>
        </head>
        <body>
            <h1>Funciones y el arreglo Session</h1>
            <form action="ej5.php" method="POST">
                 <label for="txtData">Data</label> 
                <input type="text" id="txtData" name="txtData"/>
                <br/>

                <input type="submit" name="btnAdd" value="Agregar a la sesion" id="btnAdd">
                    <input type="submit" name="btnSubs" value="Eliminar de la sesion" id="btnSubs">
                        
            </form>
            <div>
                <?php echo $contenidoSession; ?>
            </div>
        </body>
    </html>