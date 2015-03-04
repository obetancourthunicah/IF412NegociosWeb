<?php

    function renderizar($vista, $datos){
        if(!is_array($datos)){
            http_response_code(404);
            die("Error de renderizador: datos no es un arreglo");
        }

        //union de los dos arreglos
        global $global_context;
        $datos = array_merge($global_context, $datos);

        $viewsPath = "views/";
        $fileTemplate = $vista.".view.tpl";
        $layoutFile = "layout.view.tpl";
        $htmlContent = "";
        if(file_exists($viewsPath.$layoutFile)){
            $htmlContent = file_get_contents($viewsPath.$layoutFile);
            if(file_exists($viewsPath.$fileTemplate)){
                $tmphtml = file_get_contents($viewsPath.$fileTemplate);
                $htmlContent = str_replace("{{{page_content}}}",
                            $tmphtml,
                            $htmlContent);
                //Limpiar Saltos de Pagina
                $htmlContent = str_replace("\n","",$htmlContent);
                $htmlContent = str_replace("\r","",$htmlContent);
                $htmlContent = str_replace("\t","",$htmlContent);
                $htmlContent = str_replace("  ","",$htmlContent);

                //obtiene un arreglo separando lo distintos tipos de nodos
                $template_code = parseTemplate($htmlContent);

                $htmlResult = renderTemplate($template_code, $datos);

                echo $htmlResult;

            }
        }

    }

    function renderTemplate($template_block, $context){
        $renderedHTML = "";
        $foreachIsOpen = false;
        $ifIsOpen = false;
        $ifCondition = false;
        $innerBlock = array();
        $currentContext = "";
        foreach($template_block as $node){
            //buscando si es un cierre de foreach
            if(strpos($node,"{{endfor $currentContext}}") !== false){
                if ($foreachIsOpen){
                    $foreachIsOpen = false;
                    foreach($context[$currentContext] as $forcontext) {
                        $renderedHTML .= renderTemplate($innerBlock, $forcontext);
                    }
                    $innerBlock = array();
                    $currentContext = "";
                    continue;
                }
            }

            //buscando si es un cierre de if
            if(strpos($node,"{{endif $currentContext}}") !== false){
                if ($ifIsOpen){
                    $ifIsOpen = false;
                    $renderedHTML .= ($ifCondition)?renderTemplate($innerBlock, $context):"";
                    $currentContext = "";
                    $innerBlock = array();
                    $ifCondition =false;
                    continue;
                }
            }

            if($foreachIsOpen || $ifIsOpen){
                $innerBlock[] = $node;
                continue;
            }

            //buscando si es una apertura de foreach
            if(strpos($node,"{{foreach") !== false){
                if(!$foreachIsOpen){
                    $foreachIsOpen = true;
                    $currentContext = trim(str_replace("}}","",str_replace("{{foreach","",$node)));
                    continue;
                }
            }
            //buscando si es un if
            if(strpos($node,"{{if")  !== false){
                if(!$ifIsOpen){
                    $ifIsOpen = true;
                    $currentContext = trim(str_replace("}}","",str_replace("{{if","",$node)));
                    if(isset($context[$currentContext])){
                        $ifCondition = ($context[$currentContext]) && true;
                    }
                    continue;
                }
            }

            //remplazando las variables del nodo
            $nodeReplace = preg_split("/(\{\{\w*\}\})/",$node,-1,PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY );
            foreach($nodeReplace as $item){
                if(strpos($item,"{{")  !== false){
                    $index = trim(str_replace("}}","",str_replace("{{","",$item)));
                    $item = isset($context[$index])?$context[$index]:"";
                }
                $renderedHTML .= $item;
            }
        }
        return $renderedHTML;
    }

    function parseTemplate($htmlTemplate){

        $regexp_array = array( 'foreach'   => '(\{\{foreach \w*\}\})',
                               'endfor'    => '(\{\{endfor \w*\}\})',
                               'if'        => '(\{\{if \w*\}\})',
                               'if_close'  => '(\{\{endif \w*\}\})');

        $tag_regexp = "/" . join( "|", $regexp_array ) . "/";

        //split the code with the tags regexp
        $template_code = preg_split ( $tag_regexp, $htmlTemplate, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY );

        return $template_code;
    }

?>
