{{if mostrarErrores}}
<ul class="error">
    {{foreach errores}}
        <li>{{errmsg}}</li>
    {{endfor errores}}
</ul>
{{endif mostrarErrores}}
<form action="index.php?page=registro" method="post">
    <label>Nombre Completo</label><input type="text" name="txtUserName" value="{{txtUserName}}"/>
    <br>
    <label>Correo Electrónico</label><input type="email" name="txtEmail" value="{{txtEmail}}"/>
    <br>
    <label>Contraseña</label><input type="password" name="txtPswd" />
    <br>
    <label>Confirme Contraseña</label><input type="password" name="txtPswdCnf" />
    <br>
    <input type="submit" name="btnRegister" value="Regístrate" />
</form>