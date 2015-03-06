<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>{{page_title}}</title>
            <link rel="stylesheet" href="public/css/smvc.css" />
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
        </head>
        <body>
            <h1>{{page_title}}</h1>
            <ul class="menu">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php?page=login">Inicia Sesión</a></li>
                <li><a href="index.php?page=registro">Regístrate</a></li>
            </ul>
            {{{page_content}}}
        </body>
    </html>
