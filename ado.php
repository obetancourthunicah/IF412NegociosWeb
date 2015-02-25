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

 ?>
