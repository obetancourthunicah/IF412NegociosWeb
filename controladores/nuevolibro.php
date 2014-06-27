<?php

if ($method == "get"){
   setData("page-subtitulo","Agregar Nuevo Libro");
   setData("error-msg","");
   setData("txtISBN","");
   setData("txtTitulo","");
   setData("txtEditorial","");
   echo renderizarVista("nuevolibro",$pageData);
}
if ($method == "post"){
    if(isset($_POST["btnInsert"])){
        $txtISBN = $_POST["txtISBN"];
        $txtTitulo = $_POST["txtTitulo"];
        $txtEditorial = $_POST["txtEditorial"];
        $intEdicion = intval($_POST["intEdicion"]);
        //Aqui debera ir validaciones de datos
        $validado = true;
        if($txtISBN == ""){
            $validado=false;
        }
        //grabando
        require_once('modelos/libros.php');
        if($validado){
            if(nuevoLibro($txtISBN,$txtTitulo,$txtEditorial,$intEdicion)){
                header("location:index?page=libros&id=$txtISBN");
                die();
            }
        }
         setData("page-subtitulo","Agregar Nuevo Libro");
         setData("error-msg","Error al ingresar el Libro.");
         setData("txtISBN",$txtISBN);
         setData("txtTitulo",$txtTitulo);
         setData("txtEditorial",$txtEditorial);
         echo renderizarVista("nuevolibro",$pageData);
    }
}
?>