<?php
    $coleccionPersonas = array();
    $registroPersona1 = array();
    $registroPersona2 = array();

    /*No existen matrices en PHP*/

    /*El valor de un item en un arreglo
    en PHP puede ser:
        numerico
        texto / caracter
        booleano
        objeto
        -->  arreglo <--
    */

    $registroPersona1 = array(
        "nombre" => "Orlando J",
        "apellido" => "Betancourth",
        "genero" => "M", //M | Masculino F | Femenino
        "profesion" => "Ing. Ciencias de la Computación",
        "estadoCivil" => "Casado"
    );

    $registroPersona2 = array(
        "nombre" => "Yulissa Y",
        "apellido" => "Kamas",
        "genero" => "F", //M | Masculino F | Femenino
        "profesion" => "Ing. Ciencias de la Computación",
        "estadoCivil" => "Casada"
    );

    /* En Php los arreglos multidimensionales
    son mejor conocidos como
    Areglo de Arreglos */

    $coleccionPersonas = array($registroPersona1,
                               $registroPersona2,
                               array(
                                   "nombre" => "Carlos Gabriel",
                                   "apellido" => "Betancourth",
                                   "genero" => "M", //M | Masculino F | Femenino
                                   "profesion" => "Desastre",
                                   "estadoCivil" => "Soltero"
                               )
                             );

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Arreglos Multidimensionales</title>
  </head>
  <body>
    <h1>Arreglos Multidimensionales</h1>
    

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Profesión</th>
            <th>Género</th>
            <th>Estado Civil</th>
        </tr>
    <?php
        foreach($coleccionPersonas as $persona){
            echo "<tr>";
            echo "<td>". $persona["nombre"] ."</td>";
            echo "<td>". $persona["apellido"] ."</td>";
            echo "<td>". $persona["profesion"] ."</td>";
            echo "<td>". $persona["genero"] ."</td>";
            echo "<td>". $persona["estadoCivil"] ."</td>";
            echo "</tr>";
        }
    ?>
    </table>
  </body>
</html>
