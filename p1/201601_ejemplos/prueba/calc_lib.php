<?php
    session_start();

    function realizarCalculo($n1, $n2, $op){
        $rst = 0;
        switch ($op) {
            case '1':
                $rst = $n1 + $n2;
                break;
            case '2':
                $rst = $n1 - $n2;
                break;
            case '3':
                $rst = $n1 * $n2;
                break;
            case '4':
                $rst = ($n2 != 0)?$n1 / $n2 : 0;
                break;
        }
        return $rst;
    }

    function generarRegistro($n1, $n2, $op){
        $registro = array('num1'=>$n1,
                          'num2'=>$n2,
                          'opt'=>$op,
                          'rst'=>realizarCalculo($n1, $n2, $op)
                        );
        return $registro;
    }
    function guardarEnSesion($registro){
        $registros = array();
        if(isset($_SESSION['registros'])){
            $registros = $_SESSION['registros'];
        }
        $registros[] = $registro;
        $_SESSION['registros'] = $registros;
    }

    function obtenerRegistros(){
        $registros = array();
        if(isset($_SESSION['registros'])){
            $registros = $_SESSION['registros'];
        }
        return $registros;
    }

 ?>
