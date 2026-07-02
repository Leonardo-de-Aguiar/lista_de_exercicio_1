<?php


function inverterTexto($string): string {
    $chars = mb_str_split($string);
    return implode('', array_reverse($chars));
}

$textoOriginal = "Olá, meu nome é Leonardo!";
$textoInvertido = inverterTexto($textoOriginal);

$tamanhoTexto = mb_strlen($textoOriginal, 'UTF-8');

echo "$textoInvertido <br><br>";

echo "O número de letras é: $tamanhoTexto ";

?>