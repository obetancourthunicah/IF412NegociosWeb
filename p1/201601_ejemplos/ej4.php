<?php
    $intCiclos = 1;
    $cmbAction = "AC4";
    $htmlResult = "";

    if(isset($_POST['btnProcesar'])){
        $intCiclos = $_POST['intCiclos'];
        $cmbAction = $_POST['cmbAction'];
        $htmlResult = '<ul>';
        switch ($cmbAction) {
            case 'AC1':
                # code...
                for($i = 0; $i<$intCiclos; $i++){
                    $htmlResult .= '<li>Iteración '.($i + 1).'</li>';
                }
                break;
            case 'AC2':
                $i = 1;
                while($i<=$intCiclos){
                    $htmlResult .= "<li>El proceso en php esta en la iteración $i del programa</li>";
                    $i++;
                }

                break;
            case 'AC3':
                $i=0;
                $lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.";
                do {
                    $htmlResult .= '<li>'.$lorem.'</li>';
                    $i++;
                } while ($i < $intCiclos);

                break;
            case 'AC4':
                for($i = 0; $i<$intCiclos; $i++){
                    $htmlResult .= '<li>#'.($i + 1).' Iteración</li>';
                }
                break;
        }
        $htmlResult .= '</ul>';
    }
    //echo ("AC1" == $cmbAction)?'selected="selected"':'';
    // if("AC1" == $cmbAction){
    //      echo 'selected="selected"';
    //  }else {
    //      echo '';
    // }
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8"/>
     <title>Ejemplo de Ciclos</title>
   </head>
   <body>
     <form action="ej4.php" method="post">
        <label>Número de Iteraciones</label>
        <input
            type="range"
            min="0"
            max="20"
            step=5
            id="intCiclos"
            name="intCiclos"
            value="<?php echo $intCiclos; ?>"
            />
        <br/>
        <label>Opciones</label>
        <select id="cmbAction" name="cmbAction">
            <option value="AC1" <?php echo ("AC1" == $cmbAction)?'selected="selected"':''; ?> >Mensaje Corto</option>
            <option value="AC2" <?php echo ("AC2" == $cmbAction)?'selected="selected"':''; ?>>Mensaje Largo</option>
            <option value="AC3" <?php echo ("AC3" == $cmbAction)?'selected="selected"':''; ?>>Mensaje Lorem Ipsum</option>
            <option value="AC4" <?php echo ("AC4" == $cmbAction)?'selected="selected"':''; ?>>Mensaje Corto con RowID</option>
        </select>
        </br>
        <input type="submit" name="btnProcesar"
            value="Procesar"/>
     </form>
     <div>
         <?php echo $htmlResult; ?>
     </div>
   </body>
 </html>
