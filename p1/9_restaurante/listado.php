<?php
    session_start();
    require_once("funciones.php");
    $ordenes = array();
    if(isset($_SESSION["ordenes"])){
        $ordenes = $_SESSION["ordenes"];
    }

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8"/>
     <title>Listado de Ordenes</title>
     <style>
        .orden{
            float: left;
            margin:2em;
            padding:1em;
            font-family: sans-serif;
            background-color: #00D1FF;
            color:#333;
            max-width:300px;
            box-shadow: 0 0 3px #000;
        }
     </style>
   </head>
   <body>
          <?php
            foreach($ordenes as $orden){
          ?>
          <div class="orden">
              <span>Hamburquesa:</span>
              <span><?php  echo $orden["hamburguesa"]["des"];  ?></span><br/>
              <span>Refresco:</span>
              <span><?php echo $orden["refresco"]["des"];  ?></span><br/>
              <span>Complemento:</span>
              <span><?php echo $orden["complemento"]["des"];  ?></span><br/>
              <span>Postre:</span>
              <span><?php echo $orden["postre"]["des"];  ?></span><br/>
              <span>Hora Entrega:</span>
              <span><?php echo $orden["hora"];  ?></span><br/>
              <span>Cliente:</span>
              <span><?php echo $orden["cliente"];  ?></span><br/>
              <span>Precio:</span>
              <span><?php echo precio($orden);  ?></span>
          </div>
        <?php
                } //end foreach de ordenes
         ?>
   </body>
 </html>
