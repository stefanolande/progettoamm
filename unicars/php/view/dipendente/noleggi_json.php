<?php

$json = array();
$json['errori'] = $errori;
$json['noleggi'] = array();
foreach($noleggi as $noleggio){

    $element = array();
    $element['cliente'] = $noleggio->getCliente()->getNome() . " " . $noleggio->getCliente()->getCognome();
    $element['veicolo'] = $noleggio->getVeicolo()->getCostruttore()->getNome() . " " . $noleggio->getVeicolo()->getNome();
    $element['targa'] = $noleggio->getVeicolo()->getTarga();
    $element['datainizio'] = $noleggio->getDatainizio();
    $element['datafine'] = $noleggio->getDatafine();

    $json['noleggi'][] = $element;
    
}
echo json_encode($json);
?>
