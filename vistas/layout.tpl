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
    <ul class="menu">
                <li><a href="index.php?page=libros">Libros</a></li>
                <li><a href="index.php?page=postit">Postits</a></li>
                <li><a href="index.php?page=productos">Catálogo</a></li>
                <li><a href="index.php?page=carretilla">Carretilla <img src="publico/imagenes/carretillaflag.svg" style="vertical-align: middle; width:1.125em;padding:0;" /><b>{{ctdcarretilla}}</b></a></li>
                {{foreach isnotlogged}}
                    <li><a href="index.php?page=login">Iniciar Sesión</a></li>
                    <li><a href="index.php?page=registrar">Regístrate</a></li>
                {{endfor isnotlogged}}
                {{foreach security}}
                    <li><a href="index.php?page=logout">Cerrar Sesión</a></li>
                {{endfor security}}
    </ul>
    <div class="logo">
        <img src="publico/imagenes/logo.svg" />
        <h1>{{page-subtitulo}}</h1>
    </div>
   <div class="grid920 {{showerror}}" style="background-color:orange;">
        <ol>
        {{foreach glberrors}}
            <li>{{codigo}} | {{error}}</li>
        {{endfor glberrors}}
        </ol>
   </div>
   {{{mvc_contenido}}}
   <div class="footer">
        Negocios WEB SCJ 2014
   </div>
</body>
</html>