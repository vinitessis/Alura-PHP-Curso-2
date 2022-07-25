<?php

$conta1 = [
    'titular' => 'Vini',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Ruth',
    'saldo' => 5000
];

$conta3 = [
    'titular' => 'Thiago',
    'saldo' => 500
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo "Nome do Titutar: " . $contasCorrentes[$i] ['titular'] . PHP_EOL;
    echo "Saldo: " . $contasCorrentes[$i] ['saldo'] . PHP_EOL;
}