<?php
    require_once('ej7Lib.php');
    $txtEmail = '';
    $errorMsgs = array();

    if(isset($_POST['action'])){
        $txtEmail = $_POST['txtEmail'];
        $txtPswd = $_POST['txtPswd'];

        if($txtEmail == 'obetancourthunicah@gmail.com'){
            if($txtPswd == 'hola1029'){
                logonSuccess($txtEmail);
                header('Location: ej7_1.php');
                die();
            }else{
                $errorMsgs[]= 'Credenciales no son Válidas';
            }
        }else{
            $errorMsgs[]= 'Credenciales no son Válidas';
        }
    }

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8"/>
     <title>Login</title>
   </head>
   <body>
     <h1>Iniciar Sesión</h1>
     <form action = "ej7.php" method="post">
         <label for="txtEmail">Correo Electrónico</label>
         <input type="email"
            id="txtEmail" name="txtEmail"
            placeholder="correo@electrón.ico"
            value="<?php echo $txtEmail; ?>"
            />
        <br/>
        <label for="txtPswd">Contraseña</label>
        <input type="password"
            id="txtPswd" name="txtPswd"
            placeholder="Contraseña"
            />
        <br/>
        <input type="hidden" value="logon" name="action"/>
        <button id="btnProcesar">Iniciar Sesión</button>
     </form>
     <div>
         <ul>
         <?php
             if(count($errorMsgs)){
                 foreach($errorMsgs as $error){
                    echo '<li>'.$error.'</li>';
                 }
             }
         ?>
         </ul>
     </div>
     <script>
        function sendForm(e){
            e.preventDefault();
            e.stopPropagation();
            //Aqui las validaciones de javascript


            document.forms[0].submit();
        }

        document.getElementById('btnProcesar')
            .addEventListener('click', sendForm);
     </script>
   </body>
 </html>
