{{foreach arr_menues}}
<div {{if enOferta}}
        style="background-color:yellow;"
     {{endif enOferta}}
>
    <h2>{{nom_combo}}</h2>
    <b>L{{prc_combo}}</b>
    <ul>
        {{foreach extras}}
            <li>{{comp}}</li>
        {{endfor extras}}
    </ul>
</div>
{{endfor arr_menues}}