<!DOCTYPE html>
<html>
<head>
    <title>{{page-titulo}}</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="publico/estilos/estilo.css" />
    {{foreach links}}
        <link rel="stylesheet" href="{{link}}" />
    {{endfor links}}
</head>
<body>
    <h1>{{page-subtitulo}}</h1>
    <div class="grid920" style="text-align:right"><a href="index.php?page=postit" class="actionBtn">Regresar</a></div>
    <div class="grid920">
        <form action="index.php?page=nuevopostit" method="post">
             <label>Encabezado</label>
                <input type="text" name="txtTitulo"
                       id="txtTitulo" placeholder="Encabezado"
                       value = "{{txtTitulo}}"/>
                <br/>
                <label>Cuerpo</label>
                <input type="text" name="txtBody"
                       id="txtBody" placeholder="Cuerpo" maxlength="255"  multiple="true"
                       value = "{{txtBody}}"/>
                <br/>
                <label></label>
                <input type="submit" name="btnInsert"
                       value="Agregar" id="btnInsert" />
        </form>
        <div class="error">
            {{error-msg}}
        </div>
    </div>
</body>
</html>