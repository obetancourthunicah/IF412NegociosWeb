<?php


    echo '<h1>Arreglos</h1>';

    echo 'Declaración Directa sin Llave <br/>';
    $arreglo = array('Hola','Mega','Hola',3,2,true);
    print_r($arreglo);

    echo '<hr/>Declaracion de Arreglo agregando uno por uno<br/>';
    $arreglo2 = array();
    $arreglo2[] = 'Hola';
    $arreglo2[] = 3.45;
    $arreglo2[] = false;
    print_r($arreglo2);

    echo '<hr/>Declaracion de Arreglo con llaves<br/>';

    $arreglo3 = array('nombre' => 'Orlando',
                      'apellido' => 'Betancourth',
                      'edad' => 29);

    echo $arreglo3['nombre'].' '.$arreglo3['apellido'].'<br/>';
    print_r($arreglo3);

    echo '<hr/>Declaracion de Arreglo con llaves uno por uno<br/>';

    $arreglo4 = array();
    $arreglo4['nombre'] = 'Orlando';
    $arreglo4['apellido'] = 'Betancourth';
    $arreglo4['edad'] = 29;
    $arreglo4[] = 150;
    $arreglo4['otraLlave'] = 129;
    $arreglo4[] = 'Palabra';
    $arreglo4['otraLlave'] = 300;
    $variableLlave = 'otraLlave';
    $arreglo4[$variableLlave] = 500;

    echo count($arreglo4);

    //foreach ($arreglo4 as $value) {

    //}
    //arsort
    //asort
    $str =  'hola como estas';

    $arreglo5 = explode(' ', $str);




    echo $arreglo4['nombre'].' '.$arreglo4['apellido'].'<br/>';
    print_r($arreglo4);

 ?>
