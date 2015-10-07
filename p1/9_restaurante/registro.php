<?php
    //Se inicia sesión en PHP para poder guardar datos en ella

    session_start();
    require_once("funciones.php");
    $cliente = "";
    $errores = array();

    if(isset($_POST["btnRegistrar"])){

        $cliente= $_POST["txtNombre"];
        if(trim($cliente) == ""){
            $errores[]="Nombre de Cliente no puede venir vacio!";
        }
        // Se pueden agregar otras validaciones aquí.
        if(!count($errores)){
            // Se crea una estructura en un arreglo asociativa que represente
            // una orden a ser guardada.
            $nuevaOrden = array(
                //observece que se usa las funciones en funciones.php
                //para obtener el elemento del arreglo que se solicitó
                //en el POST del formulario.
                //-------------------------funcion---|  -----llave----
                "hamburguesa" => obtenerHamburguesas()[$_POST["cmbHbg"]],
                "refresco" => obtenerRefrescos()[$_POST["cmbRfs"]],
                "complemento" => obtenerComplementos()[$_POST["cmbCmp"]],
                "postre" => obtenerPostres()[$_POST["cmbPst"]],
                "hora" => $_POST["cmbHrs"],
                "cliente" => $_POST["txtNombre"]
            );
            //Se asume una colecciones de ordenes inicialmente vacia
            $ordenes = array();
            //Si hay en la sesión ordenes previas se obtienen
            //para no perder las ordenes anteriores
            if(isset($_SESSION["ordenes"])){
                $ordenes = $_SESSION["ordenes"];
            }
            //Se agrega la nueva orden a las ordenes
            $ordenes[] = $nuevaOrden;
            //Se guarda en la sesión la colección de ordenes con
            //La última orden agregada.
            $_SESSION["ordenes"] = $ordenes;
        }
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Resgitro de Pedido</title>
  </head>
  <body>
      <h1>Pedidos de Comida</h1>
      <a href="listado.php">Ver ordenes Guardadas</a>
    </br>
    <form action="registro.php"
        method="post"
        id="formFood">
        <label>Hamburguesas</label>
        <select name="cmbHbg">
            <option value="01">Wopper</option>
            <option value="02">Pechugona</option>
            <option value="03">ChuckNorris</option>
            <option value="04">Toropolada</option>
        </select>
        <br/>
        <label>Refrescos</label>
        <select name="cmbRfs">
            <?php
                //Alternativa para generar selects a partir de arreglos.
                $refrescos = obtenerRefrescos();
                foreach($refrescos as $codigo => $refresco){
                    echo '<option value="'.$codigo.'">'.$refresco["des"].' ('. $refresco["prc"] .')</option>';
                }
            ?>

            <!--
            <option value="01">Pepsi</option>
            <option value="02">Pepsi Light</option>
            <option value="03">Copan Dry</option>
            <option value="04">Shasta</option>
            -->
        </select>
        <br/>
        <label>Complementos</label>
        <select name="cmbCmp">
            <option value="01">Papas Fritas</option>
            <option value="02">Aros de Cebolla</option>
            <option value="03">Ensalada Repollo</option>
            <option value="04">Jalapeños</option>
        </select>
        <br/>
        <label>Complementos</label>
        <select name="cmbPst">
            <option value="01">Tres Leches</option>
            <option value="02">Flan de Queso</option>
            <option value="03">Rosquilla en Miel</option>
            <option value="04">Alfeñiques</option>
            <option value="05">Torrejas de Rapadura</option>
            <option value="06">Chilate de Maíz</option>
        </select>
        <br/>
        <label>Cliente</label>
        <input type="text" name="txtNombre" value="<?php echo $cliente; ?>" />
        <br/>
        <label>Complementos</label>
        <select name="cmbHrs">
            <option value="08">8:00am</option>
            <option value="09">9:00am</option>
            <option value="10">10:00am</option>
            <option value="11">11:00am</option>
            <option value="12">12:00pm</option>
            <option value="13">1:00pm</option>
            <option value="14">2:00pm</option>
            <option value="15">3:00pm</option>
            <option value="16">4:00pm</option>
            <option value="17">5:00pm</option>
        </select>
        <button name="btnRegistrar" value="Registras"
            onClick="formSubmit()">
            Registrar Pedido
        </button>
    </form>
    <script>
        function formSubmit(){
            var formData = document.getElementById("formFood");
            //aqui se puede realizar algunas validaciones con JS
            formData.submit();
        }
    </script>
    <div style="background-color:#F00;color:#FFF;">
        <?php
            //Para mostrar los errores que se validen en php.
            echo "<ul>";
            foreach($errores as $error){
                echo "<li>".$error."</li>";
            }
            echo "</ul>";
        ?>
    </div>
  </body>
</html>
