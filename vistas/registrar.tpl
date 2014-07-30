    <div class="grid920 center">
        <form action="index.php?page=registrar" method="post">
             <label>Correo Electrónico</label>
                <input type="email" name="txtemail"
                       id="txtemail" placeholder="tuCorreo@electroni.co"
                       value = "{{txtemail}}"/>
                <br/>
                <label>Nombre Completo</label>
                <input type="text" name="txtNombre"
                       id="txtNombre" placeholder="Tu Nombre Completo"
                       value = "{{txtNombre}}" />
                <br/>
                <label>Contraseña</label>
                <input type="password" name="txtPWD"
                       id="txtPWD" placeholder="Contraseña"
                       value = "{{txtPWD}}" />
                <br/>
                <label>Confirmar</label>
                <input type="password" name="txtCPWD"
                       id="txtCPWD" placeholder="Confirmar Contraseña"
                       value = "{{txtCPWD}}" />
                <br/>
                <label></label>
                <input type="submit" name="btnInsert"
                       value="Crear Cuenta" id="btnInsert" />
        </form>
    </div>