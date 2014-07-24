<?php
function renderizarVista($vista, $datos, $layout="layout"){
    $glberrores = obtenerErrores();
    $datos["showerror"] = "hideerror";
    if(count($glberrores)){
        $datos["showerror"] = "showerror";
        $datos["glberrors"] = $glberrores;
        limpiarErrors();
    }
    $mpstr = cargarLayout($layout);
    $str = str_replace('{{{mvc_contenido}}}', cargarvista($vista), $mpstr);
    render($str, $datos);
    limpiar($str);
    return $str;
}

function render(&$str, $datos, $base = false){
    if(is_array($datos)){
        foreach($datos as $llave=>$valor){
            if(is_array($valor)){
                $pos = strpos($str,"{{foreach ".$llave."}}");
                if($pos){
                    $startpos = $pos + strlen("{{foreach ".$llave."}}");
                    $endpos = strpos($str,"{{endfor ".$llave."}}");
                    $lastpos = $endpos + strlen("{{endfor ".$llave."}}");
                    $tmpstr = substr($str, $startpos, ($endpos - $startpos ));
                    $replace = renderRepeater($tmpstr, $valor);
                    $str = substr_replace($str,$replace,$pos,$lastpos - $pos);
                }else{
                    if($base){
                        render($str, $valor, $base.".".$llave);
                    }else {
                        render($str, $valor, $llave);
                    }
                }
            }else{
                if($base){
                    $str =str_replace('{{'.$base.".".$llave.'}}', $valor, $str);
                }else{
                   $str = str_replace('{{'.$llave.'}}', $valor, $str);
                }
            }
        }
    }
}

function limpiar(&$str){
    //limpiando cualquier foreach
    $posstarter = false;
    do{
        $posstarter = strpos($str,"{{foreach");
        if($posstarter){
            $posEndStarter = strpos($str,"}}", $posstarter);
            $strEndBlock = substr($str, $posstarter, $posEndStarter - $posstarter + 2);
            $strEndBlock = str_replace("foreach","endfor", $strEndBlock);
            $posEnderLast = strpos($str,$strEndBlock) + strlen($strEndBlock);
            $str = substr_replace($str,"",$posstarter, $posEnderLast - $posstarter);
        }
    }while($posstarter);
    //limpiando cualquier etiqueta
    $posstarter = false;
    do{
        $posstarter = strpos($str,"{{");
        if($posstarter){
            $posEndStarter = strpos($str,"}}", $posstarter) + 2;
            $str = substr_replace($str,"",$posstarter, $posEndStarter - $posstarter);
        }
    }while($posstarter);
}

function renderRepeater($str, $data){
    $rtStr = "";
    if(is_array($data)){
        foreach($data as $key=>$row){
            $repeatTmp = $str;
            if(is_array($row)){
                foreach($row as $llave=>$valor){
                    $repeatTmp = str_replace("{{".$llave."}}",$valor,$repeatTmp);
                }
            }else {
                $repeatTmp = str_replace("{{".$key."}}",$row,$repeatTmp);
            }
            $rtStr .= $repeatTmp;
        }
    }
    return $rtStr;
}

function cargarVista($vista){
    $htmlstr = "";
    $htmlstr = preg_replace('/\s\s+/', ' ', file_get_contents('vistas/'.$vista.".tpl"));
    return $htmlstr;
}
function cargarLayout($layout){
    $htmlstr = "";
    $htmlstr = preg_replace('/\s\s+/', ' ', file_get_contents('vistas/'.$layout.".tpl"));
    return $htmlstr;
}

?>