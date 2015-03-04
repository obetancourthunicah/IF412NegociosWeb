<?php
    $global_context = array();
    
    function addToContext($key,$value){
        global $global_context;
        $global_context[$key] = $value;
    }
    
    
?>