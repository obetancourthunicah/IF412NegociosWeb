<?php
    $global_context = array();

    function addToContext($key,$value){
        global $global_context;
        $global_context[$key] = $value;
    }

    function redirectWithMessage($message, $url){
      echo "<script>alert('$message'); window.location='$url';</script>";
      die();
    }

    function redirectToUrl($url){
      header("Location: $url");
      die();
    }
?>
