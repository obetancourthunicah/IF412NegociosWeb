<?php
    require_once("dao/dao.php");
    function obtenerLibrosIndex(){
        global $conn; //esto hace disponible la conexion dentro de esta funcíon
        $libros = array();
        $sqlstr = "SELECT * FROM libros limit 10;";
        $libros = obtenerRegistros($conn, $sqlstr);
        return $libros;
    }
    function obtenerLibroPorISBN($isbn){
        global $conn;
        $sqlstr = "SELECT * from libros where isbn='%s';";
        $libro = obtenerRegistro($conn, sprintf($sqlstr, $isbn));
        return $libro;
    }
    function nuevoLibro($isbn, $titulo, $casaEdit, $edicion){
        global $conn;
        $sqlInsert = "INSERT INTO libros(isbn, titulo, casaedit , edicion) VALUES ('%s','%s','%s',%d);";
        if(!ejecutarNoQuery($conn, sprintf($sqlInsert,$isbn,$titulo,$casaEdit,$edicion))){
            return false;
        }else{
            return true;
        }
    }
?>