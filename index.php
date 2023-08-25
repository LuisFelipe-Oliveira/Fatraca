<?php

session_start();


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" -->
        <!-- integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Fatraca</title>
</head>

<body>
    <section>
        <div class="circle">
            <div class="circle2"></div>
        </div>
        <header>
            <a href="" class="logo">
                <h1>Fatraca</h1>
            </a>
            <ul>
                <li><a href="">Sobre nós</a></li>
                <li><a href="login.php?login" id="link2"">Entrar</a></li>
                <li><a href="login.php?cadastro" id="link1"">Cadastrar</a></li>

            </ul>
        </header>
        <div class="content">
            <div class="text">
                <h2>Fatraca garantindo a sua segurança!</h2>
                <p>A Fatraca oferece uma solução completa de controle de acesso projetada para atender às
                    necessidades da Fatec.</p>
                <a href="">Saiba mais</a>
            </div>
            <div class="image">
                <img src="assets\imgs\idCard.png" alt="">
            </div>
        </div>
    </section>
    <footer class="footer"> <!-- rodapé  -->
        <span>
            É os <strong>Guris </strong> e não tem jeito
            <i class='fa fa-bolt text-warning'></i> </span>

    </footer>

    </div>

    <script src="./assets/js/jquery.js"></script>

    <script src="./assets/js/slick.min.js"></script>

    <script src="./assets/js/function.js"></script>

    <script>
        document.getElementById('link1').addEventListener('click', function () {
            localStorage.setItem('acao', 'alterarClasse1');
        });

        document.getElementById('link2').addEventListener('click', function () {
            localStorage.setItem('acao', 'alterarClasse2');
        });
    </script>

</body>

</html>