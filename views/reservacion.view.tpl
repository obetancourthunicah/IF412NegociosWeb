<h1>Reservaciones de Mesas</h1>
{{if showErrors}}
    <ul>
        {{foreach errors}}
            <li>{{error_msg}}</li>
        {{endfor errors}}
    </ul>
{{endif showErrors}}
<form action="index.php?page=reservacion"
      method = "post">
    <label>Nombre Completo</label>
    <input type="text" name="txtNombre"
           placeholder="Nombre Completo"
           value="{{txtNombre}}" />
    <br/>
    <input type="submit" name="btnProcesar" value="Reservar" />
</form>