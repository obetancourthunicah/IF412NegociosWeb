<?php
    session_start();

    function logonSuccess($userEmail){
        $_SESSION['logged'] = true;
        $_SESSION['userEmail'] = $userEmail;
    }
    function logout(){
        $_SESSION = array();
    }
    function islogged(){
        return (isset($_SESSION['logged']) && $_SESSION['logged'] == true );
    }

 ?>
