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