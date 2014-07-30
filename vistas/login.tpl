    <div class="grid920 center">
        <form action="index.php?page=login" method="post">
             <label>Correo Electrónico</label>
                <input type="email" name="txtemail"
                       id="txtemail" placeholder="tuCorreo@electroni.co"
                       value = "{{txtemail}}"/>
                <br/>
                <label>Contraseña</label>
                <input type="password" name="txtPWD"
                       id="txtPWD" placeholder="Contraseña"
                       value = "{{txtPWD}}" />
                <br/>
                <label></label>
                <input type="submit" name="btnLogin"
                       value="Iniciar Sesión" id="btnLogin" />
                 <input type="hidden" name="txtReferer"
                       id="txtReferer" value = "{{txtReferer}}" />
        </form>
    </div>