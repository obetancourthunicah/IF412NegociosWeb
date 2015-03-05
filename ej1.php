<?php
  $msg = "";
  $txt1 = "";
  if(isset($_POST["btn1"])){
    $txt1 = $_POST["txt1"];
    $msg = "Buenos Días $txt1";
  }
?>
<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8"/>
      <title>Ejercicio 1 PHP</title>
    </head>
    <body>
      <h1>Ejercicio 1 PHP </h1>
      <form action="ej1.php" method="post" >
        <label for="txt1">Nombre</label>
        <input type="text" id="txt1" name="txt1"
          value="<?php echo $txt1 ?>" />
        </br>
        <input type="submit" id="btn1" name="btn1"
          value="Procesar" />
      </form>
      <div class="msg">
        <?php echo $msg; ?>
      </div>
    </body>
  </html>
