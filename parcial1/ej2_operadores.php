<?php
  $resultado = "";
  $operador1 = 0;
  $operador2 = 0;

  if(isset($_POST["btnSumar"])){
    //Sumar los operadores
      $operador1 = intval($_POST["txtOperador1"]);
      $operador2= intval($_POST["txtOperador2"]);
      $resultado = "El resultado de sumar ".$operador1." y ".$operador2." es ".($operador1 + $operador2);
  }
  if(isset($_POST["btnRestar"])){
    //Restoar operadores
    $operador1 = intval($_POST["txtOperador1"]);
    $operador2= intval($_POST["txtOperador2"]);
    $resultado = "El resultado de restar ".$operador1." y ".$operador2." es ".($operador1 - $operador2);
  }

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Calculadora Simpa</title>
   </head>
   <body>
     <form action="ej2_operadores.php" method="post">
       <label for="txtOperador1">Operador Uno</label>
       <input type="number" max="100" min="-100"
        value="<?php echo $operador1; ?>" name="txtOperador1"
        id="txtOperador1"><br/>
        <label for="txtOperador2">Operador Dos</label>
        <input type="number" max="100" min="-100"
         value="<?php echo $operador2;?>" name="txtOperador2"
         id="txtOperador2"><br/>
         <input type="submit" value="Sumar"
          name="btnSumar" id="btnSumar"/>
          &nbsp;
          <input type="submit" value="Restar"
           name="btnRestar" id="btnRestar"/>
     </form>
     <hr />
     <div>
       <?php echo $resultado; ?>
     </div>
   </body>
 </html>
