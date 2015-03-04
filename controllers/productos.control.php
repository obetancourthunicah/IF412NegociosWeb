<?php
/* Login Controller
 * 2014-10-14 
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
  require_once("libs/template_engine.php");
  require_once("models/productos.model.php");
  
  function run(){
    if(mw_estaLogueado()){
      $datosARenderizar = array();
      if(isset($_GET["catecod"])){
        $datosARenderizar["productos"] = obtenerProductosXCategoria($_GET["catecod"]);      
      }else{
        $datosARenderizar["productos"] = obtenerProductos();      
      }
      renderizar("productos", $datosARenderizar);
    }else {
      mw_redirectToLogin("page=productos");
    }
    
  }
 
  run();
?>