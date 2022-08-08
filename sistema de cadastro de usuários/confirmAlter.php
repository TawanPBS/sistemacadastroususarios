<?php
    include_once('conexao.php');

    if(isset($_POST['alter'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cor = $_POST['cor'];

        $sqlUpdate = "UPDATE users SET nome='$nome', email='$email', senha='$senha', cor='$cor' WHERE id = $id";

        $result = $conectar->query($sqlUpdate);

        header('Location: perfil.php');
    }
?>