<?php
  //ejemplo de arreglos en PHP

  $arreglo = array(1,2,3,4,"Texto",true);

  print_r($arreglo);

  echo "<br/>";

  $arreglo2 = array("nombre" => "Fulano",
                    "apellido" => "De Tal",
                    "edad" => 20);

  print_r($arreglo2);
  echo "<br/>";

  $arreglo2[]="Esto no tiene llave";
  $arreglo2["titulo"]="Sr.";

  print_r($arreglo2);
  echo "<br/>";

  $personas = array();

  $personas[] = $arreglo2;
  $personas[] = $arreglo;

  print_r($personas);

  echo "<br/><hr/>";

  foreach($personas as $key => $value){
    echo "$key ->";
    if(is_array($value)){
      foreach($value as $key2=>$value2){
        echo "<br/>........$key2 -> $value2";
      }
    }else{
      echo $value;
    }

    echo "<br/>";
  }



?>
