<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Celke - Operadores Logicos</title>
</head>

<body>
    <?php
    $a = 10;
    $b = 8;
    $c = "";

    if (($a == 10) and ($b == 8)) {
        echo "Utilizado AND: Verdadeiro <br><br>";
    } else {
        echo "Utilizado AND: False <br><br>";
    }

    if (($a == 10) or ($b == 8)) {
        echo "Utilizado OR: Verdadeiro <br><br>";
    } else {
        echo "Utilizado OR: False <br><br>";
    }

    if (($a == 10) xor ($b == 7)) {
        echo "Utilizado XOR: Verdadeiro <br><br>";
    } else {
        echo "Utilizado XOR: False <br><br>";
    }

    if (!empty($c)) {
        echo "Utilizado !: Verdadeiro <br><br>";
    } else {
        echo "Utilizado !: False <br><br>";
    }

    if (($a == 10) && ($b == 8)) {
        echo "Utilizado &&: Verdadeiro <br><br>";
    } else {
        echo "Utilizado &&: False <br><br>";
    }

    if (($a == 10) || ($b == 7)) {
        echo "Utilizado ||: Verdadeiro <br><br>";
    } else {
        echo "Utilizado ||: False <br><br>";
    }

    ?>
</body>

</html>