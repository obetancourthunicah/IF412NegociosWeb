<?php
/* Registro Controller
 * 2014-11-03 
 * Created By OJBA
 * Last Modification 2014-11-02 20:22
 */
  require_once("libs/template_engine.php");
  require_once("models/usuarios.model.php");
  function run(){
    $htmlData = array();
    $htmlData["mostrarErrores"] = false;
    $htmlData["errores"] = array();
    $htmlData["txtUserName"] = "";
    $htmlData["txtEmail"]="";
    
    if(isset($_POST["btnRegister"])){
      $htmlData["txtUserName"] = $_POST["txtUserName"];
      $htmlData["txtEmail"] =  $_POST["txtEmail"];
      
      $pswd = $_POST["txtPswd"];
      $pswdCnf = $_POST["txtPswdCnf"];
      
      if($pswd == $pswdCnf){
        //seguir proceso de registro
        // verificar que el usuario no exista previamente
        $checkUser = obtenerUsuario( $htmlData["txtEmail"]);
        if(count($checkUser)==0){
          $htmlData["mostrarErrores"] = true;
          $htmlData["errores"][]=array("errmsg"=>"Correo Electrónico ya Usado!");
        }else{
          // geenrar la contraseña salada (salting)
          $fchingreso = time(); //date("YmdHisu"); //20141104203730069785
          
          $pswdSalted = "";
          if($fchingreso % 2 == 0){
            $pswdSalted = $pswd . $fchingreso;
          }else{
            $pswdSalted = $fchingreso . $pswd;
          }
          
          $pswdSalted = md5($pswdSalted);
          
          insertUsuario(   $htmlData["txtUserName"],
                        $htmlData["txtEmail"],
                        $fchingreso, $pswdSalted);
                        
          // ingresar
          /*
        
          */
        }
        
        
      }else{
        $htmlData["mostrarErrores"] = true;
        $htmlData["errores"][]=array("errmsg"=>"Contraseñas no coinciden");
      }
    }
    
    renderizar("registro",$htmlData);
  }
 

  run();
?>