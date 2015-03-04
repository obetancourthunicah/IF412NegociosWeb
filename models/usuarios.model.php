<?php
    //modelo de datos de productos
    require_once("libs/dao.php");
    
    function obtenerUsuario($userName){
        $usuario = array();
        $sqlstr = sprintf("SELECT idusuarios, usuarioemail, usuarionom, usuariopwd, usuarioest, UNIX_TIMESTAMP(usuariofching) as usuariofching, usuariolstlgn, usuariofatm, usuariofchlp FROM usuarios where usuarioemail = '%s';",$userName);

        $usuario = obtenerUnRegistro($sqlstr);
        return $usuario;
    }
    
    function insertUsuario($userName, $userEmail,
                           $timestamp, $password){
        $strsql = "INSERT INTO usuarios
                    (usuarioemail, usuarionom, usuariopwd,
                    usuarioest, usuariofching,  usuariolstlgn,
                    usuariofatm, usuariofchlp)
                   VALUES
                    ('%s', '%s','%s','ACT', FROM_UNIXTIME(%s) , null, 0, null);";
        $strsql = sprintf($strsql, valstr($userEmail),
                                    valstr($userName),
                                    $password,
                                    $timestamp);
        
        if(ejecutarNonQuery($strsql)){
            return getLastInserId();
        }
        return 0;
    }
    
?>