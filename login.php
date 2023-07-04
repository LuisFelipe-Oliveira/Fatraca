<?php

$flag_msg = null;

$msg = "";

if(isset($_POST["enviar"])) {
    require("./config/connect.php");

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $form = [$usuario, $senha];

    $aux = 0;

    foreach ($form as $field) {
        if (empty($field)) {
            $aux += 1;
        }
    }

    if ($aux > 0) {
        $flag_msg = false;
        $msg = "preencha todos os campos!";
    } else {

        $senha_encrypt = md5($senha);

        try {

            $sql = "SELECT * FROM fatraca_users WHERE usuario = :usuario AND senha = :senha";

            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':usuario', $usuario);
            $stmt->bindValue(':senha', $senha_encrypt);

            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $msg = "Sucesso!";
            } else {
                $msg = "Erro!";
            }

            $flag_msg = true; // Sucesso 

        } catch (PDOException $th) {
            $conn = null;

            $flag_msg = false; //Erro 
            $msg = "Erro na conexão com o Banco de dados: " . $th->getMessage();
        }

    }

    $conn = null;

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\styleLogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>

<body>

    <?php
    if (!is_null($flag_msg)) {
        if ($flag_msg) {
            echo "<div class='alert alert-success' role='alert'>$msg</div>";
        } else {
            echo "<div class='alert alert-warning' role='alert'>$msg</div>";
        }
    }
    ?>

    <div class="main-login">
        <a href="index.php" id="logo">Fatraca</a>
        <div class="left-login">
            <h1>Faça login e conheça a Fatec</h1>
            <div id="left-login-image">
                <img src="assets\imgs\loginImg.svg" alt="">
            </div>
        </div>
        <form method="post">
            <div class="right-login">
                <div class="card-login">
                    <h1>Login</h1>

                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" placeholder="Usuário">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>
                    <a href="senha1.php" class="btn-alt">Esqueceu a senha?</a>
                    <a href="cadastro.php" class="btn-alt">Criar conta</a>
                    <button class="btn-login" name="enviar">Login</button>
                    <butoton class="entrar-com">
                        <span class="entrar-txt">Entrar com</span>
                        <div class="e-btn">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-google"></i></a>
                            <a href="#"><i class="fab fa-microsoft"></i></a>
                        </div>
                    </butoton>

                </div>

            </div>
        </form>
    </div>
</body>

</html>