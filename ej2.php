<?php
$numero1 = 0;
$numero2 = 0;
$iteraciones = 10;
$msg = "";


if(isset($_POST["btnPrc"])){ // elevar el numero 1 elevado al numero 2
    $numero1 = intval($_POST["numero1"]);
    $numero2 = intval($_POST["Numero2"]);
    $newValue = $numero1;
    
       for($i = 0; $i<$numero2; $i++){
       $newValue *=$numero1;
       }
       $msg = "El valor: $numero1 a la potencia $numero2 es igual a $newValue";
}

if(isset($_POST["btnRev"])){  //escribir el numero 1 * iteracion  a la inversa
     $numero1 = intval($_POST["numero1"]);
      $iteraciones = intval($_POST["iteraciones"]);
      $contador = 1;
      
      while($iteraciones > 0){
       $msg .= "$contador ). producto" .($numero1 * $iteraciones) . "<br/>";
        $contador ++;
        $iteraciones --;
        
        }
}
if(isset($_POST["btnFoc"])){ //factorial del numero 2
    $numero1 = intval($_POST["numero1"]);
    $factorial = 1;
    
    for($i= $numero1;$i>=1;$i--){
        $factorial*=$i;
    }
    $msg = "el factorial de $numero1 es $factorial";
    
}

//tarea no perder la iteracion seleccionada


?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <title> formulario</title>
        </head>
        <body>
            <h1> formulario</h1>
            <form action="ej2.php" method="POST">
                <!--<form action="ej1.php" method="GET">-->
               <label for="txt1">Numero 1</label> 
                <input type="text" id="numero1" name="numero1" value="<?php echo $numero1; ?>"/>
                <br/>
                <label for="txt1">Numero 2</label> 
                <input type="text" id="Numero2" name="Numero2" value="<?php echo $numero2; ?>"/>
                
                <br/>
                <label for="txt1">Numero de iteraciones</label> 
                <select name="iteraciones" id="iteraciones">
                    <option value="10">10 </option>
                    <option value="20">20 </option>
                    <option value="50">50 </option>
                   
                </select>                
                <br/>
                <input type="submit" name="btnPrc" value="btnPrc" id="btnPrc">
                    <input type="submit" name="btnRev" value="btnRev" id="btnRev">
                        <input type="submit" name="btnFoc" value="btnFac" id="btnFac">
            </form>
            
            <div>
                <?php echo $msg; ?>
            </div>
            
        </body>
    </html>