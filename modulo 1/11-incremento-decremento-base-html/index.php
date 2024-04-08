<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Celke - Incremento e Decremento</title>
</head>

<body>
    <?php
        echo "<h3>Pós-incremento - 5</h3>";
        $a = 5;
        echo "Deve ser 5: " . $a++ . "<br>";
        echo "Deve ser 6: " . $a . "<br><br>";
        
        echo "<h3>Pré-incremento - 5</h3>";
        $a = 5;
        echo "Deve ser 6: " . ++$a . "<br>";
        echo "Deve ser 6: " . $a . "<br><br>";

        
        echo "<h3>Pós-decremento - 10</h3>";
        $a = 10;
        echo "Deve ser 10: " . $a-- . "<br>";
        echo "Deve ser 9: " . $a . "<br><br>";
        
        echo "<h3>Pré-decremento - 15</h3>";
        $a = 15;
        echo "Deve ser 14: " . --$a . "<br>";
        echo "Deve ser 14: " . $a . "<br><br>";
    ?>
</body>

</html>