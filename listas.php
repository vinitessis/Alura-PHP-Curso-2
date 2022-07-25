<?php

$idadeList = [12, 23, 19, 25, 30, 41, 18];
$idadeList2 = array(12, 23, 19, 25, 30, 41, 18);

list($idadeVini, $idadeRuth, $idadeThiago) = $idadeList;

$primeiraIdade = $idadeList[0];

echo $primeiraIdade . PHP_EOL;
echo PHP_EOL;

//Adicionar dados na lista
$idadeList[] = 20;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}