<?php
    session_start();

    $txtNombre = '';
    $txtApellido = '';
    // Arreglo de Arreglos
    $userCollection = array();

    if(isset($_SESSION['usercoll'])){
        $userCollection = $_SESSION['usercoll'];
    }

    if(isset($_POST['btnAgregar'])){
        $usuario = array(
                     'nombre' => $_POST['txtNombre'],
                     'apellido' => $_POST['txtApellido']
                 );
        $txtNombre = $_POST['txtNombre'];
        $txtApellido = $_POST['txtApellido'];

        $userCollection[] = $usuario;
        $_SESSION['usercoll'] = $userCollection;
    }
    // $usuario = array(
    //             'nombre' => 'Orlando',
    //             'apellido' => 'Betancourth'
    // );
    // $userCollection[] = $usuario;
    // $usuario['nombre'] = 'Yulissa';
    // $usuario['apellido'] = 'Kamas';
    // $userCollection[] = $usuario;
    /*
    | ----------------  | ----------------- |
  0 | nombre => Orlando | apellido => Beta..|
    | ----------------  | ----------------- |
  1 | nombre => Yulissa | apellido => Kama..|
    | ----------------  | ----------------- |

    */

 ?>

    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8"/>
        <title>Areglo de Arreglos</title>
      </head>
      <body>
          <h1>Ejemplo de Arreglo de Arreglos</h1>
          <form action="ej8.php"  method="post">
              <label for="txtNombre">Nombre</label>
              <input type="text" name="txtNombre"
                id="txtNombre" value="<?php echo $txtNombre;?>"
                placeholder="Primer Nombre" /> <br/>
              <label for="txtApellido">Apellido</label>
              <input type="text" name="txtApellido"
                id="txtApellido" value="<?php echo $txtApellido;?>"
                placeholder="Apellido" /> <br/>
              <input type="submit" name="btnAgregar"
                value="agregar" />
          </form>
          <table border="1">
              <tr>
                  <th>
                      Nombre
                  </th>
                  <th>
                      Apellido
                  </th>
              </tr>
              <?php
                foreach($userCollection as $oneUser){
                    echo '<tr><td>'.$oneUser['nombre'];
                    echo '</td><td>'.$oneUser['apellido'].'</td></tr>';
                }
              ?>
          </table>
      </body>
    </html>
