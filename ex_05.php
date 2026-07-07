<?php

function analisarTexto($texto, $quant_palavras, $quant_caracteres, $quant_vogais, $quant_consoantes){

$quant_palavras = str_word_count($texto);
$quant_caracteres = mb_strlen($texto, 'UTF-8');
$quant_vogais = preg_match_all('/[aeiouáéíóúãõâêôà]/i', $texto, $matches);
$quant_consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $texto, $matches);


}

$texto = "Analisar textos é demais!";

echo "texto: $texto <br>";
echo "quantidade de palavras: $quant_palavras <br>";


?>