<?php
    require_once("libreria.php");
    $mode = "";
    $titulo = "";
    $producto = array();
    if(isset($_GET["mode"])){
        $mode = $_GET["mode"];

        switch($mode){
            case "INS":
                $titulo = "Nuevo Producto";
                break;
            case "UPD":
                $titulo = "Actualizar Producto";
                break;
            case "DSP":
                $producto = obtenerProducto($_GET["prdcod"]);
                if(count($producto)){
                    $titulo = "Detalle del Producto ". $producto["prddsc"];
                }
                break;
            case "DEL":
                $titulo = "Eliminar Producto";
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
     <form action="detalleProducto.php" method="post">
         <table>
            <tr>
                <td>
                    <label for="txtPrdDsc">
                    Descripción</label>
                </td>
                <td>
                    <input type="text"
                        id="txtPrdDsc" name="txtPrdDsc"
                        value="" placeholder="Descripcíon del Producto"/>
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
                        value="" placeholder="Categoría"/>
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
                        value="" placeholder="Precio del Producto"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="cmbPrdEst">
                    Estado</label>
                </td>
                <td>
                    <select name="cmbPrdEst" id="cmbPrdEst">
                        <option value="ACT">
                            Activo
                        </option>
                        <option value="INA">
                            Inactivo
                        </option>
                        <option value="RTR">
                            Retirado
                        </option>
                        <option value="PLN">
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
                        value="" placeholder="Stock del Producto"/>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit"
                        id="btnAgregar"
                        name="btnAgregar"
                        value="Agregar"/>
                    <input type="submit"
                        id="btnActualizar"
                        name="btnActualizar"
                        value="Actualizar"/>
                    <input type="submit"
                        id="btnEliminar"
                        name="btnEliminar"
                        value="Eliminar"/>
                </td>
            </tr>
         </table>
     </form>
  </body>
</html>
