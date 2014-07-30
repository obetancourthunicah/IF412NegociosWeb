<?php
    require_once("dao/dao.php");
    
    function guardarUsuario($email, $nombre, $pswd){
        global $conn;
        $sqlInsert = "INSERT INTO usuarios (usuarioemail,usuarionombre,usuarioestado,usuariofchingreso,usuariolastlogin,usuariopwdfallido,usuariopwd)VALUES('%s','%s','ACT',now(),'10000101',0,'%s');";
        return ejecutarNoQuery($conn,
                            sprintf($sqlInsert,$email, $nombre, $pswd)  );
    }
    
    function obtenerUsuario($email){
        global $conn;
        $sqlstr = "Select * from usuarios where usuarioemail = '%s';";
        return obtenerRegistro($conn, sprintf($sqlstr,$email));
    }
    
    function registrarLoginFallido($email){
        global $conn;
        $sqlupdate = "update usuarios set usuariopwdfallido = usuariopwdfallido + 1 where usuarioemail = '%s';";
        return ejecutarNoQuery($conn, sprintf($sqlupdate,$email));
    }
    
    function registrarLogonExitoso($email){
        global $conn;
        $sqlupdate = "update usuarios set usuariopwdfallido = 0, usuariolastlogin = now() where usuarioemail = '%s';";
        return ejecutarNoQuery($conn, sprintf($sqlupdate,$email));
    }
    
    function cambiarEstado($email, $estado){
        global $conn;
        $sqlupdate = "update usuarios set usuarioestado = '%s' where usuarioemail = '%s';";
        return ejecutarNoQuery($conn, sprintf($sqlupdate,$estado, $email));
    }
?>