<?php
    include_once('conexao.php');
    session_start();
        //print_r($_SESSION);
        

        if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['senha'])==true)){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: perfil.php');
        }

        $logado = $_SESSION['email'];


    $pegaDados = "SELECT * FROM users";
    $result = $conectar->query($pegaDados);

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="JS/main.js"></script>
    <link rel="stylesheet" href="styles/profile.css">
    <title>Meu perfil</title>
</head>
<body>
    <center>
        <div class="fundo">
            <?php
                while($data = mysqli_fetch_assoc($result)){
                    echo "<div>".$data['id']."</div>";
                    echo "Nome: <input type='text' value=".$data['nome']."><br>";
                    echo "E-mail: <input type='email' value=".$data['email']."><br>";
                    echo "Senha: <input type='password' value=".$data['senha']." id='password'><br><input type='checkbox' onclick='mostrar()'> Mostrar Senha<br>";
                    echo "Cor favorita: <div class='corFav'></div>";
                    echo "<style> 
                            body{ 
                                background-color:".$data['cor'].";
                                margin: 0;
                            }
                            .corFav{
                                width: 50px;
                                height: 50px;
                                background-color: ".$data['cor'].";
                            }
                            img{
                                width: 30px;
                                height: 30px;
                            }
                            a{
                                text-decoration: none;
                            }
                    </style>";
                    echo "<a href='alterar.php?id=$data[id]'>
                            <img src='img/editar.png'></img>
                          </a>
                          <a href='sair.php?id=$data[id]'>
                            <img src='img/sair.png'></img>
                          </a>";     
                }

            ?>
        </div>
    </center>  
</body>
</html>