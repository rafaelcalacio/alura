<?php

$conta1 = [
    'titular' => 'Rafael Calacio',
    'saldo' => 5000
];
    
$conta2 = [
    'titular' => 'Joaquina',
    'saldo' => 3000
];

$conta3 =[
    'titular' => 'Cirilo',
    'saldo' => 1000
];

$contaCorrente = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contaCorrente); $i++) {
    echo $contaCorrente[$i]['saldo'] . PHP_EOL;
}

?>