 <!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Celke - Estrutura de Controle - if ... elseif ... else</title>
</head>

<body>
    <?php

    $a = 1;

    if ($a == 2) {
        echo "Depositar dinheiro. <br>";
    } elseif ($a == 1) {
        echo "Sacar dinheiro.<br>";
    } elseif ($a == 3) {
        echo "Extrato da conta corrente. <br>";
    } else {
        echo "Opção não encontrada!<br>";
    }


    ?>
</body>

</html>