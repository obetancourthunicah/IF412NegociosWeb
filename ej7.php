<?php
 /*
 CREATE TABLE `categorias` (
       `ctgid` BIGINT(8) NOT NULL AUTO_INCREMENT,
       `ctgdsc` VARCHAR(45) NULL,
       `ctgest` CHAR(3) NULL,
       PRIMARY KEY (`ctgid`));
 */
 $txtDsc = "";
 $cmbEst = "ACT";
 $last = "";
 $conn = new mysqli("127.0.0.1","root",
                    "root","nw201501");

 if($conn->errno){
   die($conn->error);
 }

 if(isset($_POST["btnSave"])){
   $txtDsc = $_POST["txtDsc"];
   $cmbEst = $_POST["cmbEst"];

   $insertSQL = "Insert into categorias (ctgdsc, ctgest) ";
   $insertSQL .= "value ('".$txtDsc."','".$cmbEst."');";

   $inserted = $conn->query($insertSQL);

   $last = $conn->insert_id;

 }

 $str = "SELECT * from categorias;";
 $cursor = $conn->query($str);
 $categorias = array();
 while($registro = $cursor->fetch_assoc()){
   //obtenga el registro de forma associativa
   /* $registro = array(
          "ctgid"=> 1,
          "ctgdsc"=> "Algun Valor",
          "ctgest"=> "ACT"
    );
    */
   $categorias[]=$registro;
 }



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Ejemplo 2 de Acceso a Datos en MYSQL</title>
  </head>
  <body>
    <h1>Categorías</h1>
    <form action="ej7.php" method="post">
      <label for="txtDsc">Categoría</label>
      <input type="text" name="txtDsc"
             id="txtDsc" value="<?php echo $txtDsc; ?>"/>
      <br/>
      <label for="cmbEst">Estado</label>
      <select name="cmbEst" id="cmbEst">
        <option value="ACT"
          <?php echo $cmbEst == "ACT"?"selected":""; ?>
        >Activo</option>
        <option value="INA"
          <?php echo $cmbEst == "INA"?"selected":""; ?>
        >Inactivo</option>
      </select>
      </br>
      <input type="submit" name="btnSave" id="btnSave" value="Guardar" />
    </form>
    <hr/>
    <h2>Categorías</h2>
    <table border="1">
      <tr>
        <th>Código</th><th>Categoría</th><th>Estado</th></tr>
        <?php
          foreach($categorias as $categoria){
            echo "<tr><td>".$categoria["ctgid"]."</td>";
            echo "<td>".$categoria["ctgdsc"]."</td>";
            echo "<td>".$categoria["ctgest"]."</td></tr>";
          }
        ?>
    </table>
    <?php echo "Last Saved Id = $last"?>
  </body>
</html>
