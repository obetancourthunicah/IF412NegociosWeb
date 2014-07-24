<?php

if ($method == "get"){
    require_once("modelos/productos.php");
   $productos = array();
   $pageNum = 1;
   if(isset($_GET['pageNum'])){
        $pageNum = intVal($_GET['pageNum']);
   }
   $productos = obtenerProductos($pageNum,3);
   $totaTmp = obtenerTotalProd();
   $totalPaginas = floor( $totaTmp / 3) + (($totaTmp%3==0)?0:1);
   $paginas = array();
   for($i=1;$i<=$totalPaginas;$i++){
     $paginas[] = array("pagina"=>$i,"selected"=>($i==$pageNum)?"sel":"");
   }
   
   //TODO: Enlazar con la vista
   setData('paginaActual', $pageNum);
   setData('paginas',$paginas);
   setData('productos',$productos);
   echo renderizarVista("productos",$pageData);
}
if ($method == "post"){
    
}
?>