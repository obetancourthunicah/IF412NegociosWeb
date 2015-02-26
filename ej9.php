<?php
  require_once("ado.php");
  $categorias = array();
  $categorias = obtenerRegistros("select * from categorias where ctgest='ACT';");
  $mode = "noset";
  $modeDescription = array(
    "insert" => "Nuevo Producto",
    "update" => "Actualizar Producto",
    "delete" => "Borrar Producto"
  );

  if(isset($_GET["action"])){
    switch($_GET["action"]){
      case "new":
        $mode= "insert";
        if(isset($_POST["btnInsert"])){
          $sqlinsert = "INSERT INTO `productos` (`prddsc`,`prdbrc`,`prdctd`,`prdest`,`ctgid`) VALUES ('%s','%s',%d,'%s', %d);";
          $sqlinsert = sprintf($sqlinsert,
                              $_POST["prddsc"],
                              $_POST["prdbrc"],
                              intval($_POST["prdctd"]),
                              $_POST["prdest"],
                              intval($_POST["ctgid"])
                              );
          insertRegistro($sqlinsert);
          echo "<script> alert('Registro guardado con exito!');";
          echo " window.location='ej8.php'; </script>";
          die();
        }
        break;
      case "upd":
        $mode= "update";
        break;
      case "del":
        $mode = "delete";
        break;
      default:
        //truquito muy util.
        echo "<script> alert('No Tiene Acceso a Esta página, redirigiendo.');";
        echo " window.location='ej8.php'; </script>";
        die();
    }
  }else{
    // ESTO ES ULTRA IMPORTANTE
    // PARA REDIRIGIR A OTRA PAGINA
    // DESDE PHP
    header("location:ej8.php");
    die();
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title></title>
  </head>
  <body>
    <h1><?php echo $modeDescription[$mode]; ?></h1>
    <form action="ej9.php?action=<?php echo $_GET["action"]; ?>" method="POST">
        <?php /*
        prdid
        prddsc
        prdbrc
        prdctd
        prdest
        ctgid */
         ?>
         <label for="prdid">
           Código Producto
         </label>
         <input type="hidden" value=""
                name="prdid" id="prdid" />

         <br/>
         <label for="prddsc">
           Producto
         </label>
         <input type="text" value=""
                name="prddsc" id="prddsc" />
         <br/>
         <label for="prdbrc">
           Código de Barra EAN32, QR, CODE 189
         </label>
         <input type="text" value=""
                name="prdbrc" id="prdbrc" />
         <br/>

         <label for="prdctd">
           Cantidad
         </label>
         <input type="range" value=""
                name="prdctd" id="prdctd" />
         <br/>

         <label for="prdest">
           Estado
         </label>
         <select id="prdest" name="prdest">
           <option value="ACT">Activo</option>
           <option value="INA">Inactivo</option>
           <option value="DES">Descontinuado</option>
           <option value="RET">Retirado</option>
         </select>
         <br/>
         <label for="ctgid"> Categoría</label>
         <select id="ctgid" name="ctgid">
           <?php
              foreach($categorias as $categoria){
                echo '<option value="'.$categoria["ctgid"].'">'.$categoria["ctgdsc"].'</option>';
              }
           ?>
         </select>
         <br/>
         <input type="submit" name="btnInsert" id="btnInsert" value="Guardar" />
    </form>
  </body>
</html>
