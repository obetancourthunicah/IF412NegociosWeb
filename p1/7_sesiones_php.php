<?php
/*
    Las sesiones son un forma de guardar información (en variables) que
    puedan ser utilizadas en distintas páginas del mismo host. A diferencia
    de las cookies (misma funcionalidad) las sesiones no manejan esa
    información el computador del cliente, solo está en el servidor.

    Cuando uno inicia una aplicación de escritorio, la aplicación mantiene
    un estado con información todo el tiempo hasta que la aplicación
    termine. En internet eso no es posible debido a la naturaleza
    sin conexión de la web. La url no puede mantener un estado por eso
    un mecanismo adecuado para poder persistir información que se requiere
    de un usuario es usando variables de sesión.
*/
//En php para iniciar y acceder a las variables de sesión es
//requerido ejecutar el comando session_start(), este comando
//abrirá y obtendrá toda la información guardada en esa sesión.

    session_start();
    $sessionName = "";
    $errors = array();

    if(isset($_SESSION["ticks"])){
        //Todas las variables de sesión de guardan y se obtienen
        //de la variable de servidor $_SESSION que es un arreglo asociativo
        $_SESSION["ticks"] ++;
    }else{
        $_SESSION["ticks"] = 1;
    }

    if(isset($_SESSION["username"])){
        $sessionName = $_SESSION["username"];
    }

    if(isset($_POST["btnLogin"])){
        $sessionName = $_POST["txtUser"];
        if($sessionName == ""){
            $errors[] = "Nombre está Vació";
        }

        if(!count($errors)){
            $_SESSION["username"] = $sessionName;
        }
    }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8"/>
     <title>Sesiones en PHP</title>
   </head>
   <body>
       <h1>
           <?php echo $sessionName; ?>
       </h1>
       <form action="7_sesiones_php.php"
             method="POST">
                <label>User Name</label>
                <input type="text" name="txtUser"
                    placeholder="Nombre de Usuario"
                    id="txtUser"

                    />
                <br/>
                <input type="submit" name="btnLogin"
                value="Iniciar Sesión" />
        </form>
        <div>
            <?php
                echo $_SESSION["ticks"];
                echo "<ul>";
                foreach($errors as $error){
                    echo "<li>$error</li>";
                }
                echo "</ul>";
            ?>
        </div>
   </body>
 </html>
