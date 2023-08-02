<?php
// session_start();

// $flag_msg = null;

// $msg = "";

// if (isset($_POST["enviar"])) {
//     require("./config/connect.php");

//     $usuario = $_POST["usuario"];
//     $senha = $_POST["senha"];

//     $form = [$usuario, $senha];

//     $aux = 0;

//     foreach ($form as $field) {
//         if (empty($field)) {
//             $aux += 1;
//         }
//     }

//     if ($aux > 0) {
//         $flag_msg = false;
//         $msg = "preencha todos os campos!";
//     } else {

//         $senha_encrypt = md5($senha);

//         try {

//             $sql = "SELECT * FROM fatraca_users WHERE usuario = :usuario AND senha = :senha";

//             $stmt = $conn->prepare($sql);

//             $stmt->bindValue(':usuario', $usuario);
//             $stmt->bindValue(':senha', $senha_encrypt);

//             $stmt->execute();

//             if ($stmt->rowCount() > 0) {
//                 $_SESSION['usuario'] = $usuario;
//                 $msg = "Sucesso!";
//             } else {
//                 $msg = "Erro!";
//             }

//             $flag_msg = true; 

//         } catch (PDOException $th) {
//             $conn = null;

//             $flag_msg = false; 
//             $msg = "Erro na conexão com o Banco de dados: " . $th->getMessage();
//         }

//     }

//     $conn = null;

//}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\styleLogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="main-login">
        <?php
        // if (!is_null($flag_msg)) {
        //     if ($flag_msg) {
        //         echo "<div class='alert alert-success' style='position: absolute; top: 1%; left: 50%'>$msg</div>";
        //     } else {
        //         echo "<div class='alert alert-warning' role='alert'>$msg</div>";
        //     }
        // }
        ?>
        <a href="index.php" id="logo">Fatraca</a>
        <div class="left-login">
            <h1>Faça login e conheça a Fatec</h1>
            <div id="left-login-image">
                <img src="assets\imgs\loginImg.svg" alt="">
            </div>
        </div>
        <form action="testLogin.php" method="post">
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
                    <button class="btn-login" name="submit">Login</button>

                </div>

            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>

</body>

</html>