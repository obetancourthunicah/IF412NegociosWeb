<div class="grid920" style="text-align:right;">
        <a href="index.php?page=nuevolibro" class="actionBtn">+ Nuevo Libro</a>
    </div>
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