<?php
$celsius = $_POST["celsius"];
$fahrenheit = ($celsius * 9 / 5 + 32);


echo "Temperatura em Celcius: ".$celsius."<br>";
echo "Temperatura em Fahrenheit: ".$fahrenheit;

?>