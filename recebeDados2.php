<?php
if($_POST){
    $tipo = $_POST['txtTipo'];
    $consumo = floatval($_POST['txtConsumo']);

    $total = 0;

   if($tipo == "residencial" && $consumo <= 500) {
        $total = $consumo * 0.4;
    } 
    elseif($tipo == "residencial" && $consumo > 500) {
        $total = $consumo * 0.65;
    }

    elseif($tipo == "comercial" && $consumo <= 1000) {
        $total = $consumo * 0.55;
    } 
    elseif($tipo == "comercial" && $consumo > 1000) {
        $total = $consumo * 0.60;
    }

    elseif($tipo == "industrial" && $consumo <= 5000) {
        $total = $consumo * 0.55;
    } 
    elseif($tipo == "industrial" && $consumo > 5000) {
        $total = $consumo * 0.60;
    }

    echo "Valor total: R$ $total";
}
?>