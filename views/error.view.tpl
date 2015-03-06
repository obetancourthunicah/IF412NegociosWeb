<h1>Lo sentimos la página que usted ha
solicitado no está disponible.</h1>
{{if showErrors}}
    <ul>
        {{foreach errors}}
            <li>{{error_msg}}</li>
        {{endfor errors}}
    </ul>
{{endif showErrors}}