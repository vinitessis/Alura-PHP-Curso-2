<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vini',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Ruth',
        'saldo' => 5000
    ],
    '123.456.789-12' => [
        'titular' => 'Thiago',
        'saldo' => 500
    ]
];

//Adicionando dados na lista
$contasCorrentes['123.456.789-13'] = [
    'titular' => 'Denise',
    'saldo' => 10000
];

foreach($contasCorrentes as $conta) {
    echo "Nome do Titular: " . $conta['titular'] . PHP_EOL;
    echo "Saldo: " . $conta['saldo'] . PHP_EOL;
    echo PHP_EOL;
}

foreach($contasCorrentes as $cpf => $conta) {
    echo "CPF: " . $cpf . PHP_EOL;
}