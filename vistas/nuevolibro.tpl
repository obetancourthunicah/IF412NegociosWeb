    <div class="grid920" style="text-align:right"><a href="index.php?page=index" class="actionBtn">Regresar</a></div>
    <div class="grid920">
        <form action="index.php?page=nuevolibro" method="post">
             <label>ISBN</label>
                <input type="text" name="txtISBN"
                       id="txtISBN" placeholder="ISBN del Libro"
                       value = "{{txtISBN}}"/>
                <br/>
                <label>Título</label>
                <input type="text" name="txtTitulo"
                       id="txtTitulo" placeholder="Título del Libro"
                       value = "{{txtTitulo}}" />
                <br/>
                <label>Casa Editorial</label>
                <input type="text" name="txtEditorial"
                       id="txtEditorial" placeholder="Editorial"
                       value = "{{txtEditorial}}" />
                <br/>
                <label># de Edición</label>
                <select name="intEdicion" id="intEdicion">
                    <option value="1">Primera Edición</option>
                    <option value="2">Segunda Edición</option>
                    <option value="3">Tercera Edición</option>
                    <option value="4">Cuarta Edición</option>
                </select>
                <br/>
                <label></label>
                <input type="submit" name="btnInsert"
                       value="Agregar" id="btnInsert" />
        </form>
        <div class="error">
            {{error-msg}}
        </div>
    </div>