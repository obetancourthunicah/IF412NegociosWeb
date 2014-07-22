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
    <div class="grid920" style="text-align:right;">
        <a href="index.php?page=nuevopostit" class="actionBtn">+ Nuevo PostIt</a>
    </div>
    <div class="board grid920">
        {{foreach postitsColl}}
        <div class="postit">
            <h2>{{postName}}</h2>
            <span>{{postbody}}</span>
        </div>
        {{endfor postitsColl}}
    </div>

</body>
</html>
