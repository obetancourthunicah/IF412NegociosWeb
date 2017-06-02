<?php

  $platosEntrada = Array(
    "E1" => Array(
                "nombre"=>"Crema de Papa en Lecha de Cabra",
                "precio"=> 40,
                "codigo"=>"E1",
                "descripcion"=>"Tazon pequeño de Crema a base de papa rallada en una base de leche de cabra pasteurizada y diluida en agua"
            ),
      "E2" => Array(
                  "nombre"=>"Ensalada Ceasar Hondureña",
                  "precio"=> 80,
                  "codigo"=>"E2",
                  "descripcion"=>"Lechuga Romana en Julianas con Zanahoria Rallada y Tomate pera en Cuatro con aderezo blanco y tiritas de tortilla tostada"
              ),
      "EN" => Array(
                          "nombre"=>"Sin Entrada",
                          "precio"=> 0,
                          "codigo"=>"EN",
                          "descripcion"=>""
                      )
      );

      $platosFuerte = Array(
        "F1" => Array(
                    "nombre"=>"Quiche de Papa en Salsa de Fetas con Espinacas",
                    "precio"=> 400,
                    "codigo"=>"F1",
                    "descripcion"=>"Pollo, Queso, Fetas en trosos horneadas en un pie de Harina con salsa a base de crema de leche"
                ),
          "F2" => Array(
                      "nombre"=>"Linguini de Algas con alcaparras en vinagreta de naranja",
                      "precio"=> 780,
                      "codigo"=>"F2",
                      "descripcion"=>"Pasta Linguini artesanal de harina de alga en salsa de ajo y parmesano con vinagreta a base de naranja agria"
                  ),
          "FN" => Array(
                              "nombre"=>"Sin Plato Fuerte",
                              "precio"=> 0,
                              "codigo"=>"FN",
                              "descripcion"=>""
                          )
      );

      $refrescos = Array(
        "R1" => Array(
                    "nombre"=>"Limonada con Hojas de Menta",
                    "precio"=> 60,
                    "codigo"=>"R1",
                    "descripcion"=>"Extracto de jugo de limon indio con hojas de menta congeladas"
                ),
          "R2" => Array(
                      "nombre"=>"Piña en leche de coco almacenada por 2 semanas",
                      "precio"=> 70,
                      "codigo"=>"R2",
                      "descripcion"=>"Chicha de Piña"
                  ),
          "RN" => Array(
                              "nombre"=>"Sin Refresco",
                              "precio"=> 0,
                              "codigo"=>"RN",
                              "descripcion"=>""
                          )
      );

      $postres = Array(
        "P1" => Array(
                    "nombre"=>"Dulce de Leche",
                    "precio"=> 100,
                    "codigo"=>"P1",
                    "descripcion"=>"Dulce de Leche"
                ),
          "PN" => Array(
                              "nombre"=>"Sin Postre",
                              "precio"=> 0,
                              "codigo"=>"PN",
                              "descripcion"=>""
                          )
      );

      function generateComboBox($cmbId,$arreglo, $llave, $descripcion, $valorSeleccionad){
        $htmlstr = '<select name="'.$cmbId.'">';
        foreach($arreglo as $item){
          if($item[$llave]==$valorSeleccionad){
            $htmlstr .= '<option value="'.$item[$llave].'" selected>'. $item[$descripcion] .'</option>';
          }else{
              $htmlstr .= '<option value="'.$item[$llave].'">'. $item[$descripcion] .'</option>';
          }

        }
        $htmlstr .='</select>';
        return $htmlstr;
      }

?>
