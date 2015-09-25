<?php
    $resultado = "";
    $intNumero1 = 0;
    $intNumero2 = 0;

    //Si el método del formulario es get
    //    se usa el arreglo $_GET
    //Si el método del formulario es post
    //    se use el arreglo $_POST

    if(isset($_POST["btnAdd"])){
        $intNumero1 = $_POST["intNum1"];
        $intNumero2 = $_POST["intNum2"];
        $resultado = "El resultado de la suma de ".$intNumero1." y ".$intNumero2." es ".($intNumero1 + $intNumero2);
    }
    if(isset($_POST["btnSubs"])){
        $intNumero1 = $_POST["intNum1"];
        $intNumero2 = $_POST["intNum2"];
        $resultado = "El resultado de la resta de ".$intNumero1." y ".$intNumero2." es ".($intNumero1 - $intNumero2);
    }
    /*

    Estructura if

    if ($a == $b) {
        # code...
    }elseif($a > $b){
        # code...
    }else{
        # code...
    }

    Estructura mutuamente excluyente
    $esVerdadero = ($a==$b) ? $valorVerdadero:$valorFalso;

    Estructura Switch
    switch ($variable) {
        case 'value':
            # code...
            break;

        default:
            # code...
            break;
    }
    */
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8"/>
     <title>Ejemplo de Calculadora</title>
   </head>
   <body>
     <!-- Notese que el método utilizado es POST -->
     <form action="4_formularios.php" method="post">
         <label for="intNum1">Número 1</label>
         <input type="text" id="intNum1"
            name="intNum1" placeholder="Un Número"
            />
        <br/>
        <label for="intNum2">Número 2</label>
        <input type="text" id="intNum2"
           name="intNum2" placeholder="Un Número"
           />
        <br/>
        <input type="submit" name="btnAdd"
            value="Sumar" id="btnAdd"/>
        <input type="submit" name="btnSubs"
            value="Restar" id="btnSubs"/>
        <input type="submit" name="btnMlt"
            value="Multiplicar" id="btnMlt"/>
        <input type="submit" name="btnDiv"
            value="Dividir" id="btnDiv"/>
     </form>
     <hr/>
     <div>
         <?php
            echo $resultado;
         ?>
     </div>
   </body>
 </html>
