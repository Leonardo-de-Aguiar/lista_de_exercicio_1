<?php

function analisarNumero($numero)
{

$paridade = ($numero % 2 == 0) ? "Par" : "Ímpar";

    if ($numero < 2) {
        $primo = "Não";
    } else {
        $primo = "Sim";
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                $primo = "Não";
                break;
            }
        }
    }

    
    $soma = 0;
    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $soma += $i;
        }
    }

    $perfeito = ($soma == $numero && $numero > 0) ? "Sim" : "Não";

    return [
        "Paridade" => $paridade,
        "Primo" => $primo,
        "Perfeito" => $perfeito
    ];
}

$resultado = analisarNumero(26);

print_r($resultado);













?>