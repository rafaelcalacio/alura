<?php

$idade = 19;
$quantidadePessoas = 2;

echo "Você só pode entrar se tiver a partir de que 18 anos" . PHP_EOL;
echo "Ou maior de 16 anos, se estiver acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
}elseif( $idade >= 16 && $quantidadePessoas > 1){
    echo "Você só tem $idade anos, mas como está acompanhado, chega junto!!!";
} else {
    echo 'Bebê não entra!!! :P';    
}

