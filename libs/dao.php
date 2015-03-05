<?php
   //data access object
   require_once("libs/parameters.php");

   // ------------------------


   $conexion = new mysqli($server, $user, $pswd ,
                          $database, $port);

   if($conexion->connect_errno){
        //die();
        die($conexion->connect_error);
   }

   function obtenerRegistros($sqlstr, &$conexion = null){
        if(!$conexion) global $conexion;
        $result = $conexion->query($sqlstr);
        $resultArray = array();
        foreach($result as $registro){
            $resultArray[] = $registro;
        }
        return $resultArray;
   }


   function obtenerUnRegistro($sqlstr, &$conexion = null){
        if(!$conexion) global $conexion;
        $result = $conexion->query($sqlstr);
        $resultArray = array();

        $resultArray[] = $result->fetch_assoc();

        return $resultArray;
   }


   function ejecutarNonQuery($sqlstr, &$conexion = null){
        if(!$conexion) global $conexion;
        $result = $conexion->query($sqlstr);
        return $conexion->affected_rows;
   }

   function valstr($str){
      if(!$conexion) global $conexion;
      return $conexion->escape_string($str);
   }

   function getLastInserId(&$conexion = null){
     global $conexion;
     return $conexion->insert_id;
   }
?>
