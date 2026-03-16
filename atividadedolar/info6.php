<?php
$dolar = $_POST["dolar"];
$cotação = "5.21";

$reais = ($dolar * $cotação);


echo "Valor em Dolar: $".$dolar."<br>";
echo "Valor em Reais: R$".$reais."<br>";

?>