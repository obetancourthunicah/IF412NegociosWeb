<?php

if ($method == "get"){
   setData('page-subtitulo','Nuevo PostIt');
   setData('txtTitulo',"");
   setData('txtBody',"");
   setData('error-msg',"");
   echo renderizarVista("nuevopostit",$pageData);
}
if ($method == "post"){
   require_once("modelos/postit.php");
   $txtTitulo = "";
   $txtBody = "";
   $errormsg = "";
   setData('page-subtitulo','Nuevo PostIt');
   if(isset($_POST["btnInsert"])){
      $txtTitulo = $_POST["txtTitulo"];
      $txtBody = $_POST["txtBody"];
      if(nuevoPostit($txtTitulo,$txtBody,false)){
         header("location:index.php?page=postit");
         die();
      }else{
         setData('txtTitulo',$txtTitulo);
         setData('txtBody',$txtBody);
         setData('error-msg',"No se pudo ingresar el nuevo Postit");
         echo renderizarVista("nuevopostit",$pageData);
      }
   }else{
      setData('txtTitulo',$txtTitulo);
      setData('txtBody',$txtBody);
      setData('error-msg',$errormsg);
      echo renderizarVista("nuevopostit",$pageData);
   }
   
}
?>