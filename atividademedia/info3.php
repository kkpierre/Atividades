<?php
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$media = ($nota1 + $nota2 + $nota3) / 3;


echo "Primeira Nota: ".$nota1."<br>";
echo "Segunda Nota: ".$nota2."<br>";
echo "Terceira Nota: ".$nota3."<br>";
echo "Média: ".$media;

if ($media >= 7){
    echo "<br>";
    echo "Aprovado";
}
else{
    echo "<br>";
    echo "Reprovado";
}

?>