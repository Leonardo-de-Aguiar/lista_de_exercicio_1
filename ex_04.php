<?php

function gerarSenha($tamanho_senha){
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_.;,#@';
    return substr(str_shuffle($caracteres), 0, $tamanho_senha);
}

$tamanho_senha = 10;

echo "Senha aleatoria gerada: ".gerarSenha($tamanho_senha);




?>