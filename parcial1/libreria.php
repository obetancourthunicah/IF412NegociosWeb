<?php
function addNumbers($a, $b){
  return $a+$b;
}

function factorial($n){
  return ($n==0)?1:$n*factorial($n-1);
}

function primarios($start,$elements){
  $primarios = Array();
  $tmpInt = $start;
  while(count($primarios)<$elements){
    $found=false;
    for($j=2; $j < $tmpInt; $j++){
      if( ($tmpInt % $j) == 0){
        $found = true;
        break;
      }
    }
      if($found==false){
        $primarios[]=$tmpInt;
      }
      $tmpInt++;
    }
  return $primarios;
}
?>
