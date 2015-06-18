<?php
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
                    placeholder="Descripción del Producto" />
                <br/>
                <label for="cmbPrdEst">Estado</label>
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
                <br/>
                <input type="submit"
                    name="btnFiltrar"
                    value="Filtrar"
                    />
        </form>
    </div>
    <div>
        <h2>Productos</h2>
        <a href>Ingresar Nuevo Producto</a>
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
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href>Ver</a>
                    <a href>Editar</a>
                    <a href>Eliminar</a>
                </td>
            </tr>
        </table>
    </div>
  </body>
</html>
