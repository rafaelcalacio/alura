<?php


$contaCorrente = [
    'red' => [
    'titular' => 'Rafael Calacio',
    'saldo' => 5000
],
    'blue' => [
    'titular' => 'Joaquina',
    'saldo' => 3000
], 
    'black' => [
    'titular' => 'Cirilo',
    'saldo' => 1000
]
    
];

foreach ($contaCorrente as $color => $conta) {
    echo $color . " " . $conta['titular'] . PHP_EOL;
}

?>

