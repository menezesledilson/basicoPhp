<?php

//Como criar variável
$a = 2;
$b = 4;
$c = 7;

$result_soma = $b + $a;
echo "Soma: $result_soma <br><br>";

$result_subtracao = $b - $a;
echo "Subtração: $result_subtracao <br><br>";

$result_multi = $b * $a;
echo "Multiplicação: $result_multi <br><br>";

$result_divisao = $c / $a;
echo "Divisão: $result_divisao <br><br>";

$result_resto = $c % $a;
echo "Resto da divisão: $result_resto <br><br>";

echo "<hr>";

$cc = 38564.32;
/* A função number_format é utilizada para converter o valor em Real */
echo "Valor na conta corrente: R$ " . number_format($cc, 2, ",", ".") . "<br><br>";

$debito = 200.16;
echo "Valor do débito: R$ " . number_format($debito, 2, ",", ".") . "<br><br>";

$result_real = $cc - $debito;
echo "Saldo: R$ "  . number_format($result_real, 2, ",", ".") . "<br><br>";