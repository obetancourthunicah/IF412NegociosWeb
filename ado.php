<?php

  $conn = new mysqli("127.0.0.1",
                     "root",
                     "root",
                     "nw201501");
  if($conn->errno){
    die($conn->error);
  }

  function obtenerRegistros($strsql){
    GLOBAL $conn;
    $registros = array();
    if($strsql != ""){
      $cursor = $conn->query($strsql);
      while($registro = $cursor->fetch_assoc()){
        $registros[] = $registro;
      }
    }
    return $registros;
  }

  function obtenerUnRegistro($strsql){
    GLOBAL $conn;
    if($strsql != ""){
      $cursor = $conn->query($strsql);
      while($registro = $cursor->fetch_assoc()){
        return $registro;
      }
    }
    return false;
  }
  function insertRegistro($strsql){
    GLOBAL $conn;
    if($strsql != ""){
      $result = $conn->query($strsql);
      if(!$result) return 0;
      return $conn->insert_id;
    }
    return 0;
  }
  function updateRegistro($strsql){
    GLOBAL $conn;
    if($strsql != ""){
      $result = $conn->query($strsql);
      if(!$result) return 0;
      return true;
    }
    return false;
  }

 ?>
