<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
if($_POST){
    $notaeducacaofisica = floatval($_POST['txtNotaEducaçãoFísica']);
     $notaquimica = floatval($_POST['txtNotaQuímica']);
     $notabiologia = floatval($_POST['txtNotaBiologia']);
$frequencia = floatval($_POST['txtFrequência']);

 $media =  ($notaeducacaofisica + $notaquimica +  $notabiologia) / 3;
 if($frequencia < 0.75) {
       echo "<div class='alert alert-danger mt-3'>" ;
 echo "Reprovado por Faltas";
echo "</div>";
 }
        elseif($frequencia >= 0.75 && $media >= 7.0 ){
echo "<div class='alert alert-success mt-3'>";
 echo "Aprovado";
echo "</div>";
        }
        elseif($frequencia >= 0.75 && $media >= 4.0 && $media < 6.9) {
 echo "<div class='alert alert-warning mt-3'>"; 
 echo "Recuperação";
echo "</div>";
        }
    else {
echo "<div class='alert alert-danger mt-3'>" ;
 echo "Reprovado";
echo "</div>";
    }
}
?>