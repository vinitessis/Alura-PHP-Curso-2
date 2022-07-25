<?php

function sacar($conta, $valorSacar) {
    if ($valorSacar > $conta ['saldo']) {
        exibeMensagem("Saldo indisponível de " . $conta['titular']);
    } else {
        $conta ['saldo'] -= $valorSacar;
        exibeMensagem("Saque realizado de " . $conta['titular']);
    };
    return $conta;
};

function depositar(array $conta, float $valorDepositar) {
    if ($valorDepositar > 0) {
        $conta ['saldo'] += $valorDepositar;
        exibeMensagem("Depósito realizado para " . $conta['titular']);
    } else {
        exibeMensagem("Valor de depósito inválido para " . $conta['titular']);
    }

    return $conta;
}

function exibeMensagem($mensagem) {
    echo $mensagem . '<br>';
};

//passou a conta original por referência usando o &, não uma cópia
// strtoupper tranforma em maiúscula, mb_strtoupper transforma até caracteres com acento em maiúscula
function titularMaiusculo (&$conta) {
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta (array $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular - Saldo: $saldo</li>";
}