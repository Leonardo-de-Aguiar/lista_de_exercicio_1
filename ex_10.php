<?php

function calcularMedia($notas)
{

$maior = max($notas);
$menor = min($notas);
$media = array_sum($notas) / count($notas);

if ($media >= 7){
    $situacao = "Aprovado";
} elseif ($media >= 5){
    $situacao = "Recuperação";
} else {
    $situacao = "Reprovado";
}

return[
    "maior" => $maior,
    "menor" => $menor,
    "media" => $media,
    "situacao" => $situacao
];

}

$notas = [7, 9, 6, 8, 7];
$resultado = calcularMedia($notas);

echo "Maior nota: ".$resultado["maior"]."<br>";
echo "Menor nota: ".$resultado["menor"]."<br>";
echo "Média: ".$resultado["media"]."<br>";
echo "Situação: ".$resultado["situacao"];







?>