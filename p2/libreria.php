<?php
    $host = "127.0.0.1";
    $user = "root";
    $pswd = "root";
    $db = "nw201502";

    $conn = new mysqli($host,
                     $user,
                     $pswd,
                     $db);

    if($conn->errno){
        die($conn->error);
    }
    

 ?>
