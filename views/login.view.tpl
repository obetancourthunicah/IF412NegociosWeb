{{if mostrarErrores}}
<ul class="error">
    {{foreach errores}}
        <li>{{errmsg}}</li>
    {{endfor errores}}
</ul>
{{endif mostrarErrores}}
<form action="index.php?page=login" method="post">
    <label>Usuario</label><input type="text" name="txtUser" value="{{txtUser}}"/>
    <br>
    <label>Contraseña</label><input type="password" name="txtPswd" />
    <br>
    <input type="submit" name="btnLogin" value="Ingresar" />
    <input type="hidden" name="returnUrl" value="{{returnUrl}}"/>  
</form>