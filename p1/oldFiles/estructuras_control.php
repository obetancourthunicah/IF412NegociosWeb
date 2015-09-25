<?php
//Estructuras de Control

$intNumero1 = 10;
$intNumero2 = 20;
$intNumero3 = "20";
echo $intNumero1 + $intNumero2;

echo "<br/>".$intNumero3;
if(!$intNumero3 ){
  echo "<br/> Es Verdadero.";
}else{

}
echo "<br/>".$intNumero3;

if($intNumero1 == 1){
  echo "A";
}elseif($intNumero1 == 2){
  echo "B";
}elseif($intNumero1 == 3){
  echo "C";
}elseif($intNumero1 == 4){
  echo "D";
}else{
  echo "E";
}
/// ==========================

///    ESTO NO SE HACE

///==========================
if($intNumero1 == 1){
echo "A";
}else{
if($intNumero1 == 2){
echo "B";
}else{
if($intNumero1 == 3 || $intNumero1==5){
echo "C";
}else{
if($intNumero1 == 4){
echo "D";
}else{
echo "E";
}}}}
///===========================
switch ($intNumero1){
  case 1:
    echo "A";
    break;
  case 2:
    echo "B";
    break;
  case 3:
  case 5:
    echo "C";
    break;
  case 4:
    echo "D";
    break;
  default:
    echo "E";
}



//for
// ++
// --
// $x += 3
// $x -= 3
//  $txt .= "Hola"
//  $y =+ 1;

//  3%2
//  -----  0.5
//  2%2
//  -----  0

//  2**4
//  ----- 16

$txt = "Hola";
$txt .= " Adios";
echo $txt;
/// Hola Adios
for($i = 10; $i > 0; $i--){

}

//while
$i = 0;
while($i<=100){
  //break;  se puede usar para salir en
  //        cualquier momento del ciclo
  $i++;
}

$i=0;
do{
  //Haga algo
  $i++;
} while($i<=10)

// ? :

foreach



?>
