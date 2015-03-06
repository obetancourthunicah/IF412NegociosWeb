<?php
/* Login Controller
 * 2014-10-14 
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
  require_once("libs/template_engine.php");
  function run(){
    $datos_para_vista = array();
    $datos_para_vista["arr_menues"] = array();
    
    // llegaremos a esto :)
    //$datos_para_vista["arr_menues"] = menues_obtener_combos();
    
    $datos_para_vista["arr_menues"][] = array(
                                      "nom_combo"=>"Combo 1 - Cuarto de Libra",
                                      "prc_combo"=> 150.00,
                                      "enOferta" => true,
                                      "extras"=> array(
                                          array("comp"=>"Cuarto de Carne"),
                                          array("comp"=>"Papas Medianas"),
                                          array("comp"=>"Refresco de 16oz"),
                                          array("comp"=>"Porción de Postre del día")
                                        )
                                      );
    $datos_para_vista["arr_menues"][] = array(
                                      "nom_combo"=>"Combo 2 - Toropolada",
                                      "prc_combo"=> 250.00,
                                      "enOferta" => false,
                                      "extras"=> array(
                                          array("comp"=>"Libra y Media de Res"),
                                          array("comp"=>"Papas Extra Grande"),
                                          array("comp"=>"Refresco de 24oz"),
                                          array("comp"=>"Postre Completo")
                                        )
                                      );
    
    
    renderizar("menu", $datos_para_vista);
  }
 
  run();
?>