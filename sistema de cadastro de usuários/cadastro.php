<?php
    
    if(isset($_POST['submit'])){
        include_once('conexao.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cor = $_POST['cor'];

        if(isset($_POST['email']) != isset($_GET['email'])){
            $send = mysqli_query($conectar, "INSERT INTO users (nome, email, senha, cor) VALUES ('$nome', '$email', '$senha', '$cor')");
        }
        
        
    }

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <title>Cadastro</title>
</head>
<body>
    <nav>
        <a href="index.php">Página de login</a>
        <a href="cadastro.php">Cadastro</a>
    </nav>
    <br>
    <form action="cadastro.php" method="POST">
        Nome completo: <input type="text" name="nome" placeholder="Nome completo">
        <br>
        E-mail: <input type="email" name="email" placeholder="Ex:alirio.machado@gmail.com">
        <br>
        Senha: <input type="password" name="senha" placeholder="******">
        <br>
        Cor preferida: <select name="cor" >
            <option value="">Selecione sua cor preferida</option>
            <option value="#B4FF9F" class="verde">Verde claro</option>
            <option value="#F9FFA4" class="amarelo">Amarelo</option>
            <option value="#FF7396" class="rosa">Rosa</option>
            <option value="#9A86A4" class="roxo">Roxo</option>
            <option value="#9D9D9D" class="cinza">Cinza</option>
        </select>
        <br>
        <input type="submit" value="Cadastrar" name="submit">
    </form>
</body>
</html>