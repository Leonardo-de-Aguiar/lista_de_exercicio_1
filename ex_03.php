<?php

function mascararCpf($cpf){

return substr($cpf,0,0). "*******". substr($cpf,-4);

}

$cpf = "12345678999";

$cpf_mascarado = mascararCpf($cpf);

echo "O cpf original é: $cpf <br><br>";
echo "O cpf mascarado é: $cpf_mascarado";

?>