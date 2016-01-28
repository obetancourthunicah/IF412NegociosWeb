<?php

    function obtenerUnNumero($strNombre){
        return count($strNombre);
    }

    function factorial($numero){
        return $numero * (($numero == 1)? 1 : factorial($numero -1));
    }

    function esNumero($valor){
        return is_numeric($valor);
    }

    function vieneVacio($valor){
        return empty($valor);
    }

    function esArreglo($valor){
        return is_array($valor);
    }

    function esCadena($valor){
        return is_string($valor);
    }

    function esContraseniaValida($valor){
        return ( preg_match('^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).{8,16}$',$valor) && true);
    }

    function esEmail($valor){
        return ( preg_match('/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i',$valor) && true);
    }

    //$validadoEmail = esEmail('asdfasdfasdf');


    /*

        vieneVacio(false)   == true;
        vieneVacio(0) == true;
        vieneVacio("0") == true;
        vieneVacio(null) == true;
        vieneVacio(array()) == true;
        vieneVacio("") == true;
    */


 ?>
