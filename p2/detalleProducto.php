<?php
    require_once("libreria.php");
    $mode = "";
    $titulo = "";
    $producto = array(
        "prdcod" => 0,
        "prddsc" => "",
        "ctgcod" => 0,
        "prdprc" => 0,
        "prdest" =>"ACT",
        "prdstk" => 0
    );

    if(isset($_POST["txtPrdCod"])){
        $mode = $_GET["mode"];
        $producto = array(
            "prdcod" => intval($_POST["txtPrdCod"]),
            "prddsc" => $_POST["txtPrdDsc"],
            "ctgcod" => intval($_POST["txtCtgCod"]),
            "prdprc" => floatval($_POST["txtPrdPrc"]),
            "prdest" => $_POST["cmbPrdEst"],
            "prdstk" => intval($_POST["txtPrdStk"])
        );

        //Aqui validar la data

        if($mode=="INS"){
            insertarProducto(
                $producto["prddsc"],
                $producto["ctgcod"],
                $producto["prdprc"],
                $producto["prdstk"],
                $producto["prdest"]);

            $_GET["mode"] = "UPD";
            $_GET["prdcod"] = getLastInsertID();
        }
        if($mode=="UPD"){
            updateProducto(
                $producto["prdcod"],
                $producto["prddsc"],
                $producto["ctgcod"],
                $producto["prdprc"],
                $producto["prdstk"],
                $producto["prdest"]);
        }
        if($mode=="DEL"){
            deleteProducto($producto["prdcod"]);
            header("location:listadoProductos.php");
            die();
        }

    }

    if(isset($_GET["mode"])){
        $mode = $_GET["mode"];

        switch($mode){
            case "INS":
                $titulo = "Nuevo Producto";
                break;
            case "UPD":
                $producto = obtenerProducto($_GET["prdcod"]);
                $titulo = "Actualizar Producto" . $producto["prddsc"];

                break;
            case "DSP":
                $producto = obtenerProducto($_GET["prdcod"]);
                if(count($producto)){
                    $titulo = "Detalle del Producto ". $producto["prddsc"];
                }
                break;
            case "DEL":
                $producto = obtenerProducto($_GET["prdcod"]);
                if(count($producto)){
                    $titulo = "Eliminar Producto ". $producto["prddsc"];
                }
                break;
            default:
                header("location:listadoProductos.php");
                die();
        }


    }else{
        header("location:listadoProductos.php");
        die();
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Detalle de Producto</title>
  </head>
  <body>
     <h1><?php echo $titulo;?></h1>
     <a href="listadoProductos.php">Regresar</a>
     <form action="detalleProducto.php?mode=<?php echo $mode;?>&prdcod=<?php echo $producto["prdcod"]; ?>" method="post">
         <table>
            <tr>
                <td>
                    <label for="txtPrdDsc">
                    Descripción</label>
                </td>
                <td>
                    <input type="hidden" name="txtPrdCod" value="<?php echo $producto["prdcod"];?>"
                    />
                    <input type="text"
                        id="txtPrdDsc" name="txtPrdDsc"
                        value="<?php echo $producto["prddsc"]; ?>"
                        placeholder="Descripcíon del Producto"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="txtCtgCod">
                    Categoría</label>
                </td>
                <td>
                    <!-- Esto lo cambiaremos por un select
                        de la tabla de categorías en un futuro
                    -->
                    <input type="text"
                        id="txtCtgCod" name="txtCtgCod"
                        value="<?php echo $producto["ctgcod"]; ?>" placeholder="Categoría"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="txtPrdPrc">
                    Precio</label>
                </td>
                <td>
                    <input type="text"
                        id="txtPrdPrc" name="txtPrdPrc"
                        value="<?php echo $producto["prdprc"]; ?>"
                        placeholder="Precio del Producto"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="cmbPrdEst">
                    Estado</label>
                </td>
                <td>
                    <select name="cmbPrdEst" id="cmbPrdEst">
                        <option value="ACT"
                        <?php echo ($producto["prdest"] == "ACT") ? "selected=selected":""; ?> >
                            Activo
                        </option>
                        <option value="INA"
                        <?php echo ($producto["prdest"] == "INA") ? "selected=selected":""; ?>
                        >
                            Inactivo
                        </option>
                        <option value="RTR"
                        <?php echo ($producto["prdest"] == "RTR") ? "selected=selected":""; ?>
                        >
                            Retirado
                        </option>
                        <option value="PLN"
                        <?php echo ($producto["prdest"] == "PLN") ? "selected=selected":""; ?>
                        >
                            Stand By
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="txtPrdStk">
                    Stock</label>
                </td>
                <td>
                    <input type="text"
                        id="txtPrdStk" name="txtPrdStk"
                        value="<?php echo $producto["prdstk"]; ?>" placeholder="Stock del Producto"/>
                </td>
            </tr>
            <tr>
                <td colspan="2">

                <?php
                    if($mode != "DSP") {

                        if($mode == "INS"){
                ?>

                    <input type="submit"
                        id="btnAgregar"
                        name="btnAgregar"
                        value="Agregar"/>
                    <?php
                        } // ==INS

                        if($mode == "UPD"){
                     ?>
                    <input type="submit"
                        id="btnActualizar"
                        name="btnActualizar"
                        value="Actualizar"/>
                    <?php
                        } // == UPD
                        if($mode == "DEL") {
                    ?>
                    <input type="submit"
                        id="btnEliminar"
                        name="btnEliminar"
                        value="Eliminar"/>
                <?php
                        } // == DEL
                    } // != DSP
                ?>
                </td>
            </tr>
         </table>
     </form>
  </body>
</html>
