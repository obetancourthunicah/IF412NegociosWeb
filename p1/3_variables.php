<?php
    /*
    Variables en php

    Todas las variables empizan con el signo $

    php es debilmente tipiado, no require de declaración de tipo previo

    Nomenclaturas para la definición de variables
    camello -- las variables se nombran con palabras completas
                 y se capitaliza la letra de cada palabra exceptuando
                 la primera.
              ej.
                 $estaEsUnaVariable
                 $cuadnolosgatosnoestanlosratoneshacenfiesta
                        variable sin nomenclatura
                 $cuandoLosGatosNoEstanLosRatonesHacenFiesta
                        misma variable con nomenclatura
    serpiente -- las variables se nombran con palabras completas
                y se separa con guión bajo ( _ ) las palabras
                esta nomenclatura la popularizó python.
              ej.
                 $cuando_los_gatos_no_estan_los_ratones_hacen_fiesta
    hungaro  -- las variables se le antepone el prefijo que determine
                el tipo de dato que contiene la variable, esta es
                muy usado en lenguages de programación que no son
                tipiados.
              ej.
                $iCuandoLosGatosNoEstanLosRatonesHacenFiesta   entero
                $sCuandoLosGatosNoEstanLosRatonesHacenFiesta   texto
                $bCuandoLosGatosNoEstanLosRatonesHacenFiesta   booleano
                $vCuandoLosGatosNoEstanLosRatonesHacenFiesta   vector
                $oCuandoLosGatosNoEstanLosRatonesHacenFiesta   objeto
                $dCuandoLosGatosNoEstanLosRatonesHacenFiesta   decimal

                $strNombreCompleto = "";
                $strEmail = "";
                $intEdad = 0;
                $dblPrecio= 100.99;
                $esBlanco = false;
                $esNumerico = true;
                $intEdad = "Cien Años";


    Funciones utiles para usar con variables

    isset($variable)  //determina si la variable existe en memoria

    Operadores
    + suma    2 + 2  = 4
    - resta   2 - 2  = 0
    * multiplicacion  2 * 2 = 4
    / división  2 / 2 = 1
    % modulus (residuo) 3 % 2 = 1

    ++ incremento  3++ = 4
    -- decremento  3-- = 2
    ** exponencial (4**2) 4 al cuadrado  16
    += acumulación  3+=2 =  5
    -= reducción 4-=2  = 2

    . concatenación  a . b    ab
    .= concetenación acumulada  a .= b . c   abc

    operadores lógicos
    ==  igualdad
    <   menor que
    >   mayor que
    <= menor o igual
    >= mayor o igual
    !  negación
    != desigualdad
    === igualdad profunda (valor y tipo de dato)

    */

    if(isset($_GET["btnEnviar"])){
        $strNombreCompleto =  $_GET["txtNombre"];
        $strEmail = $_GET["txtEmail"];
    }


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Ejemplo 1</title>
  </head>
  <body>
    <h1>Ejemplo 1 Manejo de Variable</h1>
    <!-- accion ira apuntando al mismo archivo -->
    <form action="3_variables.php" method="GET">
        <label>Nombre Completo</label>
        <input type="text" name="txtNombre"
                placeholder="Nombre Completo"
                id="txtNombre" />
        <br/>
        <label>Correo Electrónico</label>
        <input type="email" name="txtEmail"
            placeholder="tuCorreo@electro.nico"
            id="txtEmail" />
        <br/>
        <input type="submit" name="btnEnviar"
            id="btnEnviar" value="Enviar" />
        <input type="submit" name="btnEnviarDos"
            id="btnEnviarDos" value="Enviar" />
    </form>
    <div>
        <?php
            if(isset($strNombreCompleto)){
                echo $strNombreCompleto;
                echo "<br/>";
                echo $strEmail;
            }
        ?>
    </div>
  </body>
</html>
