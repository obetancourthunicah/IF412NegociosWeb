<?php
    //este archivo solo tiene funciones declaradas para
    //ser utilizadas por otros scripts

    function suma($a, $b){
        return $a + $b;
    }

    function resta($a, $b){
        return $a - $b;
    }

    function multiplicacion($a, $b){
        return $a * $b;
    }

    function division($a, $b){
        if ($b == 0){
            return false;
        }else{
            return $a / $b;
        }
    }
?>
