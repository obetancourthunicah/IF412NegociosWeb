<?php
function redirectWithMessage($msg, $redirectTo){
  echo "<script> alert('$msg');";
  echo " window.location='$redirectTo'; </script>";
  die();
}
?>