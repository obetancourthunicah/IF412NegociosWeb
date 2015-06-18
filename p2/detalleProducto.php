<?php
    require_once("libreria.php");
    
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Detalle de Producto</title>
  </head>
  <body>
     <h1>Producto</h1>
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
