<?php
$nome = $_POST["nome"];
$valor1 = $_POST["valor1"];
$valor2 = $_POST["valor2"];
$soma = $valor1 + $valor2;


echo "Olá, ".$nome."<br>";
echo "Primeiro Valor: ".$valor1."<br>";
echo "Segundo Valor: ".$valor2."<br>";
echo "Resultado: ".$soma;

?>