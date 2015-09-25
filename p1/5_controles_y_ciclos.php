<?php
    //Estructura de Control
    /*
    if () {
        # code...
    }elseif (condition) {
        # code...
    }else {
        # code...
    }

    switch (variable) {
        case 'value':
            # code...
            break;

        default:
            # code...
            break;
    }

    $variable = (condicion) ? valorVerdadero : valorFalse;

    if(codicion){
        $variable = valorverdadero;
    }else{
        $variable = valirfalse;
    }

    */
    //Estructura de Ciclos
    /*
    for($i = 0; $i< 20; $i++ ){
        # code...
    }
    while ($a <= 10) {
        # code...
    }

    do {
        # code...
    } while ($a <= 10);

    foreach ($variable as $llave => $valor) {
        # code...
    }
    foreach ($variable as $valor) {
        # code...
    }

    */

    $strResultado = "";
    if(isset($_POST["btnPrc"])){
        for($i=1;$i<=$_POST["intIter"];$i++){
             $strResultado .= "OJBA";
             $strResultado .= (($i%2)==0)?" es Par":"";
             $strResultado .= "<br/>";
        }
    }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8"/>
     <title>Estructuras de Control y Ciclos</title>
   </head>
   <body>
       <form action="5_controles_y_ciclos.php" method="POST">
           <label>Iteraciones</label>
           <select name="intIter">
               <option value="1">1</option>
               <option value="5">5</option>
               <option value="10">10</option>
               <option value="15">15</option>
               <option value="20">20</option>
           </select>
           <br/>
           <input type="submit" name="btnPrc" value="Procesar"/>
       </form>
       <div>
           <?php echo $strResultado; ?>
       </div>
   </body>
 </html>
