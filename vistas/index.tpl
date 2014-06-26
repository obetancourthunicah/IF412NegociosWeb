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
        {{foreach libros}}
        <div class="item">
            <img src="" />
            <h4>{{titulo}}</h4>
            <span><b>ISBN:</b><a href="index.php?page=libros&id={{isbn}}">{{isbn}}</a></span>
            <span><b>Editorial:</b> {{casaedit}}</span>
        </div>
        {{endfor libros}}
    </div>
</body>
</html>