<?php

require_once 'funcoes.php';

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
    ],
    '123.456.789-13' => [
        'titular' => 'Carlos',
        'saldo' => 500000
    ]
];

$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes ['123.456.789-11'], 100);
$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes ['123.456.789-10'], 50);
$contasCorrentes['123.456.789-12'] = sacar($contasCorrentes ['123.456.789-12'], 1000);
$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes ['123.456.789-10'], 1000);
$contasCorrentes['123.456.789-11'] = depositar($contasCorrentes ['123.456.789-11'], -1000);

titularMaiusculo($contasCorrentes ['123.456.789-10']);

echo PHP_EOL;

foreach($contasCorrentes as $cpf => $conta) {
    exibeMensagem("CPF: $cpf - Nome: {$conta['titular']} - Saldo: {$conta['saldo']}");
}

echo PHP_EOL;

unset ($contasCorrentes['123.456.789-13']); //Remover item da lista

foreach($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta; //Função list - Transforma cada parte do array em uma nova variável
    exibeMensagem("CPF: $cpf - $titular - Saldo: $saldo");
}

echo "<ul>";
foreach($contasCorrentes as $cpf => $conta) {
    exibeConta($conta);
}
echo "</ul>";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf =>$conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>