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
    $senha = $_POST["senha"];
    $celular = $_POST["telefone"];
    $cpf = $_POST["cpf"];


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

        $senha_encrypt = md5($senha);

        try {
            $sql = "INSERT INTO fatraca_users(nome,sobrenome,usuario,email,senha,celular,cpf) 
            VALUES (:nome,:sobrenome,:usuario,:email,:senha,:celular,:cpf)";

            $stmt = $conn->prepare($sql);

            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":sobrenome", $sobrenome);
            $stmt->bindParam(":usuario", $usuario);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":senha", $senha_encrypt);
            $stmt->bindParam(":celular", $celular);
            $stmt->bindParam(":cpf", $cpf);

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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets\css\styleCadastro.css">
    <title>Cadastro</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>

    <div class="container mt-5">

        <?php
        if (!is_null($flag_msg)) {
            if ($flag_msg) {
                echo "<div class='alert alert-success' role='alert' ></div></div></div>$msg</div>";
            } else {
                echo "<div class='alert alert-warning' role='alert'>$msg</div>";
            }
        }
        ?>

                <a href="index.php" id="logo" >Fatraca</a>
                    <div class="main">
                        <form method="post">
                            <h3 id="titulo">Cadastro</h3>
                            <div class="esquerda">
                                <div class="caixa">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form" id="nome" name="nome" required>
                                </div>
                                <div class="caixa">
                                    <label for="sobrenome">Sobrenome</label>
                                    <input type="text" class="form" id="sobrenome" name="sobrenome" required>
                                </div>
                                <div class="caixa">
                                    <label for="usuario">Usuário</label>
                                    <input type="text" class="form" id="usuario" name="usuario" required>
                                </div>
                                <div class="caixa">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="direita">
                                <div class="caixa">
                                    <label for="nome">Senha</label>
                                    <input type="password" class="form" id="senha" name="senha" required>
                                </div>
                                <div class="caixa">
                                    <label for="telefone">Telefone</label>
                                    <input type="tel" class="form" id="telefone" name="telefone" required>
                                </div>
                                <div class="caixa">
                                    <label for="cpf">CPF</label>
                                    <input type="text" class="form" id="cpf" name="cpf" required>
                                </div>
                                <button type="submit" class="btn-enviar" name="enviar">Enviar</button>
                                <div class="login">
                                    <h5>Já possui um cadastro? </h5><a href="login.php">Entre</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>