<?php 

// login

    session_start();

    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])){
        //Acessa

        include_once('./config/connect.php');

        $usuario = $_POST['usuario'];
        $senha = md5($_POST['senha']);

        $sql = "SELECT * FROM `fatraca_users` WHERE usuario = '$usuario' AND senha = '$senha'";

        $stmt = $conn->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetchAll();

        if (count($result) < 1){
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }else{
            foreach($result as $row){
                $_SESSION['name'] = $row['nome'];
                $_SESSION['fullname'] = "{$row['nome']} {$row['sobrenome']}";
                $_SESSION['senha'] = $senha;
                header('Location: sistema.php');
            }
        }
        
    }
    else{
        //Não acessa
        header('Location: login.php');
    }



?>