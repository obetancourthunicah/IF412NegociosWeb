<?php
    //Areglo Simple
    $ArrSimple = ["Hola",1, true, 1000.95];

    //Se usa print_r para imprimir el arreglo completo
    //Solo se debe usar en desarrollo para depuración
    //de código.
    print_r($ArrSimple);
    echo "<br/>";

    //Creación de Arreglo Vacío
    $ArrComplex1 = array();
    print_r($ArrComplex1);
    //La función is_array sirve para determinar
    //Si una variable es un arreglo o no
    echo "<br/>" . is_array($ArrComplex1);
    $NotArray = "No es un Arreglo";
    echo "<br/>" . !(is_array($NotArray) && false);

    //Se puede crear un arreglo empujando
    //elemento al arreglo usando [] vacios.
    //El elemento asignado siempre quedará en la
    //última posición del arreglo.
    $ArrComplex2[] = "Item 1";
    $ArrComplex2[] = "Item 2";
    $ArrComplex2[] = "Item 3";
    $ArrComplex2[] = "Item 4";
    echo "<br/>";
    print_r($ArrComplex2);

    //Arreglos associativos
    //Sus elementos son identificados por una llave
    //que se determina entre las []
    $ArrAssoc1["nombre"] = "OJBA";
    $ArrAssoc1["apellido"] = "LEASC";
    $ArrAssoc1["edad"] = 30;
    $ArrAssoc1["email"] = "obetancourthunicah@gmail.com";
    //El arreglo tambien puede usar llaves ordinales
    //autoasignadas por PHP el lleva el control del
    //siguiente ordinal disponible
    $ArrAssoc1[] = "Un Valor x";
    $ArrAssoc1["edad2"] = 60;
    $ArrAssoc1[] = "Un Valor y";
    //Para editar el valor de un elemento existente
    //solo se hace referencia con la llave
    $ArrAssoc1[1] = "Un Valor Z";
    $ArrAssoc1["email"] = "falta";
    echo "<br/>";
    print_r($ArrAssoc1);

    //Declaración de un arreglo Asociativo con
    //estructura de llave => valor
    $ArrAssoc2 = array(
        "llave1"=>"Hola",
        "llave2"=>"Clase",
        "llave3"=>"Negocios"
    );
    $ArrAssoc2["llave4"] = "Otro Valor";
    $ArrAssoc2["llave2"] = "clase";
    echo "<br/>";
    print_r($ArrAssoc2);

    //Los Arreglos puede contener dentro de un elemento
    //Otro Arreglo
    $ArrNested = array();
    $ArrNested[]=$ArrAssoc2;
    $ArrNested[]=$ArrAssoc1;
    echo "<br/>";
    print_r($ArrNested);

    //Para recorrer cualquier arreglo se puede utilizar
    //un ciclo especial de php con la siguiente sintaxis
    foreach ($ArrAssoc1 as $llave => $valor) {
        //por cada iteración la llave del elemento
        //iterado se asigna a la variable $llave y
        //el valor del elemento a la variable $valor
        echo "<br/>".$llave ." <b>".$valor."</b>";
    }

    echo "<hr/>";
    //En caso de omitir la estructura $llave=>$valor
    // php asigna el valor a la variable
    foreach($ArrNested as $arregloInterno){
        foreach($arregloInterno as $llave=>$valor){
            echo "<br/>".$llave ." <b>".$valor."</b>";
        }
    }

    //Funciones Adicionales que se usan para manipular
    //arreglos

    //$arreglo = explode($delimitador, $texto);

    //$texto = implode($delimitador, $arreglo);

    //$arregloOrdenadoAscendente = asort($arreglo);

    //$arregloOrdenadoDescendiente = arsort($arreglo);
    
 ?>
