<?php

session_start();

$flag_msg = null;

$msg = "";

if (isset($_POST["enviar"])) {
    require("./config/connect.php");

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);
    $celular = $_POST["telefone"];
    $cpf = $_POST["cpf"];
    $tipo = 2;

    $form = [$nome, $sobrenome, $usuario, $email, $senha, $celular, $cpf];

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

        // $senha_encrypt = md5($senha);

        try {

            $sql = "INSERT INTO fatraca_users(nome,sobrenome,usuario,email,senha,celular,cpf,tipo_users_id) 
            VALUES (:nome,:sobrenome,:usuario,:email,:senha,:celular,:cpf,:tipo)";

            $stmt = $conn->prepare($sql);

            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":sobrenome", $sobrenome);
            $stmt->bindParam(":usuario", $usuario);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":senha", $senha);
            $stmt->bindParam(":celular", $celular);
            $stmt->bindParam(":cpf", $cpf);
            $stmt->bindParam(":tipo", $tipo);

            $stmt->execute();

            if (!isset($_SESSION['usuario'])) {
                header("Location: login.php"); // Redireciona para a página de login
                exit();
            }

            $flag_msg = true; // Sucesso 
            // $msg = "Dados enviados com sucesso!";
            header("location: login.php");


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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets\css\styleLogin1.css">
</head>

<body>
    <a href="index.php" id="logo">Fatraca</a>
    <?php
        if (!is_null($flag_msg)) {
            if ($flag_msg) {
                echo "<div class='alert alert-success' role='alert' ></div></div></div>$msg</div>";
            } else {
                echo "<div class='alert alert-warning' role='alert'>$msg</div>";
            }
        }
        ?>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="post">
                <h1>Crie uma conta</h1>
                <br>
                <input type="text" placeholder="Nome" id="nome" name="nome" namerequired/>
                <input type="text" placeholder="Sobrenome" id="sobrenome" name="sobrenome" required/>
                <input type="text" placeholder="Usuario" id="usuario" name="usuario" required/>
                <input type="tel" placeholder="Telefone" id="telefone" name="telefone" required/>
                <input type="text" placeholder="CPF" id="cpf" name="cpf" required/>
                <input type="email" placeholder="E-mail" id="email" name="email" required/>
                <input type="password" placeholder="Senha" id="senha" name="senha" required/>
                <br>
                <button type="submit" name="enviar">Cadastre-se</button>
                <p class="mobile-text">Já tem conta?
                    <a href="#" id="signIn2">Entre</a>
                </p>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="testLogin.php" method="post">
                <h1>Entre</h1>
                <br>
                <input type="text" name="usuario" placeholder="Usuario" />
                <input type="password" name="senha" placeholder="Senha" />
                <a href="senha1.php">Esqueceu sua senha?</a>
                <button name="submit">Entre</button>
                <p class="mobile-text">Não tem conta?
                    <a href="#" id="signUp2">Cadastre-se</a>
                </p>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bem Vindo Novamente!</h1>
                    <p>Faça o login e se conecte novamente no Fatraca</p>
                    <button class="ghost" id="signIn">Entre</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Olá, Visitante!</h1>
                    <p>Introduza o seus dados e conheça o Fatraca</p>
                    <button class="ghost" id="signUp">Cadastre-se</button>
                </div>
            </div>
        </div>
    </div>

    <script src="assets\js\login.js"></script>
</body>

</html>