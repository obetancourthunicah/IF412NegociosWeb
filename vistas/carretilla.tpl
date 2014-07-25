    <div class="grid920">
        <div>
        <span>Linea</span>
        <span>Producto</span>
        <span>Ctd</span>
        <span>Precio</span>
        <span>Iva</span></div>
        {{foreach crrtproductos}}
            <div><span>{{carretillaln}}</span>
            <span>{{producto}}</span>
            <span>{{carrCtd}}</span>
            <span>{{CarrPrc}}</span>
            <span>{{carrIva}}</span>
            </div>
        {{endfor crrtproductos}}
    </div>