<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Celke - SESSION</title>
</head>

<body>
    <h2>Cadastra usuário</h2>
<form method="GET" action="processa.php">
    <label>Nome:</label>
    <input type=" text" name = "nome_cliente" placeholder="Digite o nome" required /> <br> <br>

    <label>E-mail:</label>
    <input type="email" name = "email_cliente" placeholder="Digite o email" required /> <br> <br>

    <label>Senha:</label>
    <input type="password" name = "senha_cliente" placeholder="Digite a senha" required /> <br> <br>

    <input type="submit" value="Cadastrar">
</form>
</body>

</html>