<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Celke - Operadores de Comparacao</title>
</head>

<body>
    <?php
    $a = 10;
    $b = 8;
    $c = 10;

    if ($a == $b) {
        echo "Verdadeiro: o número $a é igual ao valor $b <br><br>";
    } else {
        echo "Falso: o número $a não é igual ao valor $b <br><br>";
    }

    if ($a != $b) {
        echo "Verdadeiro: o número $a é diferente do valor $b <br><br>";
    } else {
        echo "Falso: o número $a não é diferente do valor $b <br><br>";
    }    

    if ($a < $b) {
        echo "Verdadeiro: o número $a é menor do valor $b <br><br>";
    } else {
        echo "Falso: o número $a não é menor do valor $b <br><br>";
    } 

    if ($a > $b) {
        echo "Verdadeiro: o número $a é maior do valor $b <br><br>";
    } else {
        echo "Falso: o número $a não é maior do valor $b <br><br>";
    }

    if ($a <= $b) {
        echo "Verdadeiro: o número $a é menor ou igual do valor $b <br><br>";
    } else {
        echo "Falso: o número $a não é menor ou igual do valor $b <br><br>";
    }

    if ($a >= $c) {
        echo "Verdadeiro: o número $a é maior ou igual do valor $c <br><br>";
    } else {
        echo "Falso: o número $a não é maior ou igual do valor $c <br><br>";
    }
    ?>
</body>

</html>