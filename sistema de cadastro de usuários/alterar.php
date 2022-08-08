<?php
    include_once('conexao.php');
    session_start();
    
    

    if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['senha'])==true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: perfil.php');
    }

    $logado = $_SESSION['email'];

if(!empty($_GET['id'])){

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM users WHERE id=$id";

        $result = $conectar->query($sqlSelect);

        if($result->num_rows > 0){
            while($data = mysqli_fetch_assoc($result)){
                $nome = $data['nome'];
                $email = $data['email'];
                $senha = $data['senha'];
                $cor = $data['cor'];
            }
            
        }else{
            header('Location: perfil.php');
        }  
}else{
    header('Location: perfil.php');
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="JS/main.js"></script>
    <link rel="stylesheet" href="styles/main.css">
    <title>Cadastro</title>
</head>
<body>
    <nav>
        <a href="index.php">Página de login</a>
        <a href="cadastro.php">Cadastro</a>
    </nav>
    <br>
    <form action="confirmAlter.php" method="POST">
        Nome completo: <input type="text" name="nome" value="<?php echo $nome?>">
        <br>
        E-mail: <input type="email" name="email" value="<?php echo $email?>">
        <br>
        Senha: <input type="password" name="senha" value="<?php echo $senha?>" id="password"> <input type="checkbox" onclick="mostrar()"> Mostrar Senha
        <br>
        Cor preferida: <select name="cor" <?php echo "style='background-color:".$cor.";'"?>>
            <option value="<?php echo $cor ?>"></option>
            <option value="#B4FF9F" class="verde">Verde claro</option>
            <option value="#F9FFA4" class="amarelo">Amarelo</option>
            <option value="#FF7396" class="rosa">Rosa</option>
            <option value="#9A86A4" class="roxo">Roxo</option>
            <option value="#9D9D9D" class="cinza">Cinza</option>
        </select>
        <br>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <br>
        <input type="submit" value="Alterar" name="alter">
    </form>
</body>
</html>