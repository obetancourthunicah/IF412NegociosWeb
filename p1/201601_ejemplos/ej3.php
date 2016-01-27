<?php
    $txtNombre = '';
    $sender = '';

    //$_GET
    //$_POST
    if(isset($_GET['btnProcesar'])){
        $txtNombre = $_GET['txtNombre'];
    }
    if(isset($_GET['btnProcesarInv'])){
        $txtNombre = $_GET['txtNombre'];
        $sender = 'btnProcesarInv';
    }


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Formulario en PHP</title>
  </head>
  <body>
    <form action="ej3.php" method="get">
        <label for="txtNombre">Nombre Completo</label>
        <br/>
        <input type="text" name="txtNombre"
            id="txtNombre"
            placeholder="Escriba su Nombre Completo"
            maxlength="80"
            size="80"
            value="<?php echo $txtNombre; ?>"
        />
        <br/>
        <input type="submit" name="btnProcesar"
            value="Procesar" id="btnProcesar"/>
            <br/>
        <input type="submit" name="btnProcesarInv"
            value="Procesar 2" id="btnProcesarInv"/>
    </form>
    <div>
        <b>Bienvenido a Negocios Web
            <?php
                if($sender == 'btnProcesarInv'){
                    echo '<i>'.$txtNombre.'</i>';
                }else{
                    echo $txtNombre;
                }
                /*

                    1 ^ 1 falso
                    1 ^ 0 verd
                    0 ^ 1 verd
                    0 ^ 0 fals
                        1 == "1"  true
                        1 === "1" false
                */
             ?></b>
    </div>
  </body>
</html>
