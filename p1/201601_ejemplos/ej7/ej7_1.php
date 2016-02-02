<?php
    require_once('ej7Lib.php');
    if(!islogged()){
        echo '<script>alert("Requiere que inicie sesión!");';
        echo 'window.location.assign("ej7.php");</script>';
        die();
    }
 ?>
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8"/>
        <title>Logon Page</title>
      </head>
      <body>
          <h1>Bienvenido <?php echo $_SESSION['userEmail'];?></h1>
      </body>
    </html>
