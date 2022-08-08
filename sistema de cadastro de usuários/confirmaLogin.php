<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    include_once('conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $pegaDados = "SELECT * FROM users WHERE email = '$email' and senha='$senha'";

    $resultado = $conectar->query($pegaDados);

    if(mysqli_num_rows($resultado) < 1){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: index.php');
    }else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: perfil.php');
    }
}else{
    //não acessa
    header('Location: index.php');
}
?>