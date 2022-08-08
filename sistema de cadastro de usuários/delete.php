<?php
    if(!empty($_GET['id'])){
        include_once('conexao.php');
    
        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM users WHERE id=$id";

        $result = $conectar->query($sqlSelect);

        if($result->num_rows > 0){
            $sqlDelete = "DELETE FROM users WHERE id=$id";
            $resultDelete = $conectar->query($sqlDelete);
        }
            
    }
    header('Location: index.php');
?>