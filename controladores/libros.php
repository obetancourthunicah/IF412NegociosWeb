<?php 
if ($method == "get"){
    require_once("modelos/libros.php");
    if(isset($_GET["id"])){
        $isbn = $_GET["id"];
        $libro = obtenerLibroPorISBN($isbn);
        foreach($libro as $columna=>$valor){
            setData($columna, $valor);
        }
        echo renderizarVista("libros", $pageData);
    }else{
        header("location:index.php");
        die();
    }
}
if ($method == "post"){
    
}
?>