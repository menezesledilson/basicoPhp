<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Celke - Passagem de parametros por valor e referencia</title>
</head>

<body>
    <?php

    function exibe($num)
    {
        if($num >= 1) {
            echo "Valor passado para a função: $num <br>";
            $qtd = $num - 1;
            exibe($qtd);
        }
    }
exibe(10);

    ?>
</body>

</html>