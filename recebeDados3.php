<?php
if($_POST){
    $valor = floatval($_POST['txtTipo']);
    $categoria = $_POST['txtConsumo'];

    $desconto = 0;
    $frete = false;

   if($categoria == "clienteComum" && $consumo <= 500) {
         $desconto = $valor * 0.05;
    } 
    elseif($categoria == "clienteComum" && $consumo > 500) {
        $frete = true;
    }

    elseif($categoria == "clienteVIP" && $consumo <= 1000) {
         $desconto = $valor * 0.10;
           $frete = true;
    } 
    elseif($categoria == "clientePremium" && $consumo <= 5000) {
         $desconto = $valor * 0.15;
    $frete = true;
    } 
  $final = $valor - $desconto;
echo "<div class='card mt-4 p-3'>";
echo "<h5>Resultado da Compra</h5>";

echo "<p>Valor original: <strong>R$ $valor</strong></p>";
echo "<p>Desconto aplicado: <strong>R$ $desconto</strong></p>";
echo "<p>Valor final: <strong>R$ $final</strong></p>";

if($frete){
echo "<span class='badge bg-success'>Frete Grátis</span>";
}

echo "</div>";

}
?>