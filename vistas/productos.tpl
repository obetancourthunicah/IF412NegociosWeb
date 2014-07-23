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
   <h2>Catálogo de Productos</h2>
   <div class="grid920">
    {{foreach productos}}
    <div class="prd">
        <h3>{{producto}}</h3>
        <img src="publico/imagenes/{{produri}}"/><br/>
        <b>Precio: </b>{{prodPrc}}<br/>
        <b>Iva: </b>{{prodIva}}<br/>
        <b>Stock: </b>{{prodStock}}<br/>
        <a href="index.php?page=addCrt&prdid={{productoid}}&pageNum={{paginaActual}}">Agregar a Carretilla</a>
    </div>
    {{endfor productos}}
   </div>
   <div class="grid920" style="text-align: right">
        {{foreach paginas}}
            <a href="index.php?page=productos&pageNum={{pagina}}">{{pagina}}</a> | 
        {{endfor paginas}}
   </div>
</body>
</html>