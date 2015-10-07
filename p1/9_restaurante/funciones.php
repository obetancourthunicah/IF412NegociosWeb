<?php
    function validarNombre($nombre){
        return !(trim($nombre)=="");
    }

    function obtenerHamburguesas(){
        $hmb = array(
            "01"=>array(
                    "des"=>"Wopper",
                    "prc"=>100,
                    "isv"=>15
                ),
            "02"=>array(
                    "des"=>"Pechugona",
                    "prc"=>120,
                    "isv"=>15
                ),
            "03"=>array(
                    "des"=>"ChuckNorris",
                    "prc"=>180,
                    "isv"=>15
                ),
            "04"=>array(
                    "des"=>"Toropolada",
                    "prc"=>140,
                    "isv"=>15
                )
        );
        return $hmb;
    }

    function obtenerRefrescos(){
        $rfs = array(
            "01"=>array(
                    "des"=>"Pepsi",
                    "prc"=>16,
                    "isv"=>15
                ),
            "02"=>array(
                    "des"=>"Pepsi Light",
                    "prc"=>18,
                    "isv"=>15
                ),
            "03"=>array(
                    "des"=>"Copan Dry",
                    "prc"=>30,
                    "isv"=>15
                ),
            "04"=>array(
                    "des"=>"Shasta",
                    "prc"=>8,
                    "isv"=>15
                )
        );
        return $rfs;
    }

    function obtenerComplementos(){
        $cmp = array(
            "01"=>array(
                    "des"=>"Papas Fritas",
                    "prc"=>30,
                    "isv"=>15
                ),
            "02"=>array(
                    "des"=>"Aros de Cebolla",
                    "prc"=>30,
                    "isv"=>15
                ),
            "03"=>array(
                    "des"=>"Ensalada de Repollo",
                    "prc"=>20,
                    "isv"=>15
                ),
            "04"=>array(
                    "des"=>"Jalapeños",
                    "prc"=>20,
                    "isv"=>15
                )
        );


        return $cmp;
    }

    function obtenerPostres(){
        $pst = array(
            "01"=>array(
                    "des"=>"Tres Leches",
                    "prc"=>40,
                    "isv"=>15
                ),
            "02"=>array(
                    "des"=>"Flan de Queso",
                    "prc"=>40,
                    "isv"=>15
                ),
            "03"=>array(
                    "des"=>"Roquilla en Miel",
                    "prc"=>30,
                    "isv"=>15
                ),
            "04"=>array(
                    "des"=>"Alfeñiques",
                    "prc"=>10,
                    "isv"=>15
                ),
            "05"=>array(
                    "des"=>"Torrejas de Rapadura",
                    "prc"=>20,
                    "isv"=>15
                ),
            "06"=>array(
                    "des"=>"Chilate de Maíz",
                    "prc"=>50,
                    "isv"=>15
                )
        );
        return $pst;
    }

    function precio($orden){
        $precio = 0;
        foreach($orden as $item){
            if(is_array($item)){
                $precio += ($item["prc"] * (1 + ($item["isv"]/100)));
            }
        }
        return round($precio,2);
    }


    //ejemplo de clojure
    /*
    $Variable = "";
    function privateScope(){
        global $Variable;
        $Variable = "Hola";
    }
    function porReferencia(&$Variable){
        return $Variable;
    }
    porReferencia($Variable);
    */
 ?>
