<?php
    
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="confirmaLogin.php" method="POST">
        E-mail: <input type="email" name="email" placeholder="Ex: alirio.machado@gmail.com">
        <br>
        Senha: <input type="password" name="senha" placeholder="******">
        <br>
        <input type="checkbox" name="lembrar"> Lembrar de mim
        <br>
        <input type="submit" value="Entrar" name="submit">
        <br>
        <a href="cadastro.php">Ainda não possui cadastro? Clique aqui</a>
    </form>
</body>
</html>