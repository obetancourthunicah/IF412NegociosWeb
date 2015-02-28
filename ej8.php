<?php
// #include c++
// import c#
// using vb
// require_once php
require_once("ado.php");
$sqlstr = "Select * from productos;";
$productos = obtenerRegistros($sqlstr);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Trabajar con Productos</title>
  </head>
  <body>
    <h1>Productos</h1>
    <a href="ej9.php?action=new">Nuevo Producto</a>
    <table>
      <tr>
        <th>Código</th>
        <th>Producto</th>
        <th>CB</th>
        <th>Inventario</th>
        <th>Estado</th>
        <th>Categoría</th>
        <th>Update</th>
      </tr>
      <?php
      /*
      prdid
      prddsc
      prdbrc
      prdctd
      prdest
      ctgid

      */
        foreach($productos as $producto){
          echo "<tr><td>".$producto["prdid"]."</td>";
          echo "<td>".$producto["prddsc"]."</td>";
          echo "<td>".$producto["prdbrc"]."</td>";
          echo "<td>".$producto["prdctd"]."</td>";
          echo "<td>".$producto["prdest"]."</td>";
          echo "<td>".$producto["ctgid"]."</td>";
          echo '<td><a href="ej9.php?action=upd&prdid='.$producto["prdid"].'"> -> </a></td></tr>';
        }
      ?>
    </table>
  </body>
</html>
