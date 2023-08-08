<?php 

    session_start();

    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])){
        //Acessa

        include_once('./config/connect.php');

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM `fatraca_users` WHERE usuario = '$usuario' AND senha = '$senha'";

        $result = $conn->query($sql);

        if ($result->rowCount() < 1){
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }else{
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
        
    }
    else{
        //Não acessa
        header('Location: login.php');
    }

?>