<?php
    /*
        Funciones
        El poder de PHP es que tiene mas de 1000 funciones nativas,
        ya hemos utilizado varias pero tambien podemos definir nuestras
        propias funciones para poder ejecutarlas en algun momento
        de la ejecución del script php.

        la sintaxis para crear un funcion es:
        ------------------------------------------
        function nombreDeFuncion() {
            codigoAEjecutar ...
        }
        ------------------------------------------

        La idea principal de crear funciones es la reutilización
        de código no solo un solo script sino en multiples scripts
        de php. Php nos brinda mecanismos para poder declara
        funciones en un archivo externo al script que los require
        y poderlos utilizar.

        PHP nos brinda 4 funciones para importar archivos php externos

        include("uriArchivoExterno.php");

                el include obtiene el archivo declarado e importa (copia)
                el contenido del archivo en el script actual para su posterior
                interpretación. Si hay un error el script php no se detiene por
                tanto es recomendable no usarlo para importar funciones.

        include_once("uriArchivoExterno.php");

                las declaraciones de funciones en php no pueden contener
                el mismo nombre de función más de un vez, por eso cuando se
                comete el error de mandar a llamar el mismo archivo con include
                se emite el error de que ya existe la firma para la misma
                función. Para evitar esto, se puede usar el include_once que
                ejecuta la importación igual que el include con la diferencia
                de que si ya ha importado anteriormente el archivo simplemente
                lo ignora.

        require("uriArchivoExterno.php");

                la función require es similar a la include. La ventaja de
                utilizar está funcion sobre include es que php interpreta
                y valida este archivo antes de importarlo asi evitamos
                que se importe código con errores de sintaxis.

        require_once("uriArchivoExterno.php");

                la ventaja que trae la función require sobre la función
                include se mejora aún cuando se evita errores por llamar
                funciones ya declaradas y eso logramos con require_once,
                esta función es la que más utilizaremos.

    */


    require_once("8_1_funciones_lib.php");

    $resultado = "";

    function factorial($n){
        return (($n==0)?1:$n*factorial($n-1));
    }

    /*
    ver archivo 8_1_funciones_lib.php
    ahi encontramos la declaración de otras funciones
    que están disponibles para este script
    por la instrucción ejecutada en la linea 59
    function suma($a, $b){
        return $a + $b;
    }
    */


    if(isset($_POST["btnCalcular"])){
        $n = $_POST["intNumero"];
        $n = suma($n , 1); //esta funcion está declarada en otro archivo
        $resultado = "El factorial de $n es " .
                     factorial($n) . ".";
    }


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Funciones en PHP</title>
  </head>
  <body>
    <h1>Cálculo de Factorial (!(n + 1))</h1>
    <form action="8_funciones_php.php"
        method="post">
        <label>Número a Calcular</label>
        <input type="text" id="intNumero"
            name="intNumero"
            placeholder="Un Número" />
        <br/>
        <input type="submit" name="btnCalcular"
            value="Calcular" id="btnCalcular" />
    </form>
    <div>
        <?php
            echo $resultado;
        ?>
    </div>
  </body>
</html>
