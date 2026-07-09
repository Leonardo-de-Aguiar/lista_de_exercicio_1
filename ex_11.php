<?php

function formatarTexto($texto){

$quant_caracteres = mb_strlen($texto, 'UTF-8');
$letras_maiusculas = mb_strtoupper($texto, 'UTF-8');
$letras_minusculas = mb_strtolower($texto, 'UTF-8');
$primeira_maiuscula = mb_convert_case($texto, MB_CASE_TITLE, 'UTF-8');

return[
    "caracteres" => $quant_caracteres,
    "maiusculas" => $letras_maiusculas,
    "minusculas" => $letras_minusculas,
    "primeira_maiuscula" => $primeira_maiuscula
];

}

$texto = "formatar textos é demais!";
$resultado = formatarTexto($texto);

echo "Quantidade de caracteres: ".$resultado["caracteres"]."<br>";
echo $resultado["maiusculas"]."<br>";
echo $resultado["minusculas"]."<br>";
echo $resultado["primeira_maiuscula"];


?>