<?php
  session_start();
  if(isset($_POST["btnExe"])){
    $persona = array();
    $persona["Nombre"] = $_POST["nom"];
    $persona["ApePaterno"] = $_POST["apep"];
    $persona["ApeMaterno"] = $_POST["apem"];
    $persona["FechaNac"] = $_POST["fchnac"];
    $persona["Genero"] = $_POST["genero"];
    $persona["Telefono"] = $_POST["tel"];
    $persona["Movil"] = $_POST["telmovil"];
    $persona["Correo"] = $_POST["email"];

    $personas = array();
    if(isset($_SESSION["personas"])){
      $personas = $_SESSION["personas"];
    }
    $personas[] = $persona;

    $_SESSION["personas"] = $personas;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Ejercicio 2</title>
  </head>
  <body>
    <h1>Ejercicio 2</h1>
    <form action="exa2.php" method="post">
      <label for="nom">Nombre</label>
      <input type="text" id="nom" name="nom" />
      <br/>
      <label for="apep">Apellido Paterno</label>
      <input type="text" id="apep" name="apep" />
      <br/>
      <label for="apem">Apellido Materno</label>
      <input type="text" id="apem" name="apem" />
      <br/>
      <label for="fchnac">Fecha Nacimiento</label>
      <input type="date" id="fchnac" name="fchnac" />
      <br/>
      <label for="genero">Genero</label>
      <input type="radio" id="genero1" name="genero" value="M"/>Másculino
      <input type="radio" id="genero2" name="genero" value="F"/>Femenino
      <br/>
      <label for="tel">Teléfono</label>
      <input type="text" id="tel" name="tel" />
      <br/>
      <label for="telmovil">Teléfono Móvil</label>
      <input type="text" id="telmovil" name="telmovil" />
      <br/>
      <label for="email">Correo Electrónico</label>
      <input type="email" id="email" name="email" />
      <br/>
      <input type="submit" name="btnExe" id="btnExe" value="Registrar" />
    </form>
  </body>
</html>
