<?php

if ($method == "get"){
   if($_GET["page"]=="addCrt"){
        //funcionalidad para la carretilla
        require_once("modelos/carretilla.php");
        require_once("modelos/productos.php");
        $carretillaID = obtenerCarretillaCliente();
        if(obtenerStockDisponible($_GET["prdid"])>0){
            if(guardarLinea($carretillaID,
                        obtenerSiguienteLinea($carretillaID),
                        $_GET["prdid"])){
                header("location:index.php?page=productos&pageNum=".$_GET["pageNum"]);
                die();
            }
        }else{
            agregarError("WARNING", "El producto no tiene stock disponible");
            header("location:index.php?page=productos&pageNum=".$_GET["pageNum"]);
            die();
        }
   }
   if($_GET["page"]=="carretilla"){
        require_once("modelos/carretilla.php");
        $crtProductos =  obtenerProductosCarretillaXId(obtenerCarretillaCliente());
        $contador = 1;
        $subtotal = 0;
        $total = 0;
        $iva = 0;
        for($i=0; $i < count($crtProductos); $i++){
            $crtProductos[$i]["hln"] = $contador;
            $subtotal += $crtProductos[$i]["CarrPrc"] / (1 + $crtProductos[$i]["carrIva"]);
            $total += $crtProductos[$i]["CarrPrc"];
            $contador++;
        }
        $iva = $total - $subtotal;
        setData('page-subtitulo',"Mi Carretilla de Compra");
        setData("crrtproductos", $crtProductos);
        setData("crrtsubtotal", sprintf("%01.2f",$subtotal));
        setData("crrtiva", sprintf("%01.2f",$iva));
        setData("crrttotal", sprintf("%01.2f",$total));
        echo renderizarVista("carretilla", $pageData);
        
   }
}
if ($method == "post"){
    
}

?>