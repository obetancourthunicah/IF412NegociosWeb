<?php
    require_once('calc_lib.php');

    $num1 = 0;
    $num2 = 0;
    $cmbOper = '1';
    $msgs = array();

    if(isset($_POST['btnCalcular'])){
        $num1 = floatval($_POST['num1']);
        $num2 = floatval($_POST['num2']);
        $cmbOper = $_POST['cmbOper'];

        $registro = generarRegistro($num1,$num2,$cmbOper);
        guardarEnSesion($registro);
        //$msgs[]='¡La operación se guardó de forma exitosa!';
        header("Location:calc_list.php");
        die();
    }

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8"/>
     <title>Fomulario de Calculo</title>
   </head>
   <body>
     <h1>Formulario de Cálculo</h1>
     <?php
        if(count($msgs)>0){
            echo '<ul>';
            foreach($msgs as $msg){
                echo '<li>'.$msg.'</li>';
            }
            echo '</ul>';
        }
     ?>
     <form action="calc_form.php" method="post">
         <label for="num1">Número 1</label>
         <input type="number" name="num1"
            id="num1" value="<?php echo $num1; ?>" />
         <br/>
         <label for="num2">Número 2</label>
         <input type="number" name="num2"
            id="num2" value="<?php echo $num2; ?>" />
         <br/>
         <label for="cmbOper">Operador</label>
         <select name="cmbOper" id="cmbOper">
             <option value="1" <?php echo ($cmbOper == '1')? 'selected="selected"' : ''; ?> >Sumar</option>
             <option value="2" <?php echo ($cmbOper == '2')? 'selected="selected"' : ''; ?> >Restar</option>
             <option value="3" <?php echo ($cmbOper == '3')? 'selected="selected"' : ''; ?> >Multiplicar</option>
             <option value="4" <?php echo ($cmbOper == '4')? 'selected="selected"' : ''; ?> >Dividir</option>
         </select>
         <br/>
         <input type="submit" name="btnCalcular" value="Procesar" />
     </form>
   </body>
 </html>
