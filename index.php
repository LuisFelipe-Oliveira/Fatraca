<?php

session_start();


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Fatraca</title>
</head>

<body>
    <div class="app">

        <aside class="logo"> <!-- logo  -->
            <a href="index.php" class="logo">
                <img src="assets\imgs\logo2.png" alt="logo" />
            </a>
        </aside>

        <aside class="menu-area"> <!-- menu  -->
            <nav class="menu">
                <a href="login.php">
                    <i class="fa-solid fa-right-to-bracket"></i> Login
                </a>
                <a href="cadastro.php">
                    <i class="fa-solid fa-user-plus"></i> Cadastre-se
                </a>
                <a href="AdmPage.php">
                    <i class="fa fa-users"></i> Administradores
                </a>
            </nav>
        </aside>

        <Header>
            <header class="header d-nome flex-column">
                <h1 class="mt-3">
                    Venha conhecer a Fatec!
                </h1>
                <p class="lead text-muted">Fatraca garantindo a sua segurança na faculdade.</p>
            </header>
        </Header>


        <main class="content container-fluid">
            <div class="conteudo">
                <div >
                <img id="biometria" src="assets\imgs\biometria.png" alt="">
                    <p > O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo
                        a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os
                        caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos,
                        mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada. Foi
                        popularizada nos anos 60 com a disponibilização das folhas de Letraset, que continham passagens
                        com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que
                        incluem versões do Lorem Ipsum.O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo
                        a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os
                        caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos,
                        mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada. Foi
                        popularizada nos anos 60 com a disponibilização das folhas de Letraset, que continham passagens
                        com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que
                        incluem versões do Lorem Ipsum.</p>
                </div>
                <hr />
                <div>
                <img id="card" src="assets/imgs/card.png" alt="">
                <p > O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo
                        a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os
                        caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos,
                        mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada. Foi
                        popularizada nos anos 60 com a disponibilização das folhas de Letraset, que continham passagens
                        com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que
                        incluem versões do Lorem Ipsum.O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo
                        a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os
                        caracteres de um texto para criar um espécime de livro. </p>
                
                </div>
            </div>
        </main>


        <footer class="footer"> <!-- rodapé  -->
            <span>
                É os <strong>Guris </strong> e não tem jeito
                <i class='fa fa-bolt text-warning'></i> </span>

        </footer>

    </div>
    
    <script src="./assets/js/jquery.js"></script>

    <script src="./assets/js/slick.min.js"></script>

    <script src="./assets/js/function.js"></script>

</body>

</html>