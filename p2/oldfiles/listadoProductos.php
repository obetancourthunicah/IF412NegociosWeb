<?php
    session_start();
    require_once("libreria.php");
    $lst_prddsc_f = "";
    $lst_prdest_f = "ACT";
    if(isset($_SESSION["lst_prddsc_f"])){
        $lst_prddsc_f = $_SESSION["lst_prddsc_f"];
        $lst_prdest_f = $_SESSION["lst_prdest_f"];
    }

    if(isset($_POST["btnFiltrar"])){
        $lst_prddsc_f = $_POST["txtPrdDsc"];
        $lst_prdest_f = $_POST["cmbPrdEst"];
        $_SESSION["lst_prddsc_f"] = $lst_prddsc_f;
        $_SESSION["lst_prdest_f"] = $lst_prdest_f;
    }


    /*
    workwith \ trabajar con

    listado con todos los registros
    opcion : Agregar, Modificar,
             Ver , Eliminar
    filtros: Filtros del Listado

    detalle del Registro

    listadoProductos.php
    detalleProducto.php

    */
    $Productos = obtenerProductos($lst_prddsc_f,$lst_prdest_f);


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Listado de Producto</title>
  </head>
  <body>
    <div>
        <form action="listadoProductos.php"
             method="post">
                <label for="txtPrdDsc">
                Descripción del Producto</label>
                <input type="text"
                    name="txtPrdDsc"
                    id="txtPrdDsc"
                    placeholder="Descripción del Producto"
                    value="<?php echo $lst_prddsc_f; ?>" />
                <br/>
                <label for="cmbPrdEst">Estado</label>
                <select name="cmbPrdEst" id="cmbPrdEst">
                    <option value="ACT"
                        <?php  echo ($lst_prdest_f == "ACT")?"selected=selected":"";  ?>
                    >
                        Activo
                    </option>
                    <option value="INA"
                        <?php  echo ($lst_prdest_f == "INA")?"selected=selected":"";  ?>
                    >
                        Inactivo
                    </option>
                    <option value="RTR"
                        <?php  echo ($lst_prdest_f == "RTR")?"selected=selected":"";  ?>
                    >
                        Retirado
                    </option>
                    <option value="PLN"
                        <?php  echo ($lst_prdest_f == "PLN")?"selected=selected":"";  ?>
                    >
                        Stand By
                    </option>
                </select>
                <br/>
                <input type="submit"
                    name="btnFiltrar"
                    value="Filtrar"
                    />
        </form>
    </div>
    <div>
        <h2>Productos</h2>
        <a href="detalleProducto.php?mode=INS">Ingresar Nuevo Producto</a>
        <table>
            <tr>
                <th>Cod.</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        <?php
            foreach($Productos as $producto){
                echo "<tr>";
                echo "<td>".$producto["prdcod"]."</td>";
                echo "<td>".$producto["prddsc"]."</td>";
                echo "<td>".$producto["ctgcod"]."</td>";
                echo "<td>".$producto["prdprc"]."</td>";
                echo "<td>".$producto["prdstk"]."</td>";
                echo "<td>".$producto["prdest"]."</td>";
                echo "<td>";
                echo '<a href="detalleProducto.php?mode=DSP&prdcod='.$producto["prdcod"].'">Ver</a> | ';
                echo '<a href="detalleProducto.php?mode=UPD&prdcod='.$producto["prdcod"].'">Editar</a> | ';
                echo '<a href="detalleProducto.php?mode=DEL&prdcod='.$producto["prdcod"].'">Eliminar</a>';
                echo "</td></tr>";
            }
        ?>
        </table>
    </div>
  </body>
</html>
