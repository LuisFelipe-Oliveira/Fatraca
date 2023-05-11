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
    <div class="main-login">
        <a href="index.php" id="logo">Fatraca</a>
        <div class="left-login">
            <h1>Faça login e conheça a Fatec</h1>
            <div id="left-login-image">
                <img src="assets\imgs\loginImg.svg" alt="">
            </div>
        </div>

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
                <a href="" class="btn-alt">Esqueceu a senha?</a>
                <a href="cadastro.php" class="btn-alt">Criar conta</a>
                <button class="btn-login">Login</button>
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

    </div>
</body>

</html>