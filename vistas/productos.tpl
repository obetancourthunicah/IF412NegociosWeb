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
   <div class="grid920 {{showerror}}" style="background-color:orange;">
        <ol>
        {{foreach glberrors}}
            <li>{{codigo}} | {{error}}</li>
        {{endfor glberrors}}
        </ol>
   </div>
   <div class="grid920">
    {{foreach productos}}
    <div class="prd">
        <h3>{{producto}}</h3>
        <img class="circle" src="publico/imagenes/{{produri}}"/></br>
        <b>Precio: </b>{{prodPrc}}<br/>
        <b>Iva: </b>{{prodIva}}<br/>
        <b>Stock: </b>{{prodStock}}<br/><br/>
        <a class="actionBtn" href="index.php?page=addCrt&prdid={{productoid}}&pageNum={{paginaActual}}">Agregar a Carretilla</a>
    </div>
    {{endfor productos}}
   </div>
   <div class="grid920 pager">
        |{{foreach paginas}}
            <a class="{{selected}}" href="index.php?page=productos&pageNum={{pagina}}">{{pagina}}</a> | 
        {{endfor paginas}}
   </div>
   
</body>
</html>