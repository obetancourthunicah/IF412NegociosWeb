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
    <h1>{{page-titulo}}</h1>
    <div class="grid920">
        <h2>{{titulo}}</h1>
        <h3>{{isbn}}</h2>
        <p>{{casaedit}}</p>
    </div>
    <a href="index.php?page=index">Regresar</a>
</body>
</html>