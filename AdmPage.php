<?php

require("./config/connect.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/admpage.css">
    <title>Página Administrador</title>
</head>

<body>
    <header>
        <nav class="menu-desktop">
            <ul>
                <li><a href="">Sair</a></li>
            </ul>
        </nav><!-- menu-desktop -->
    </header><!-- header -->

    <section class="tabela-conteudo">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nº</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Usuário</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>CPF</th>
                    <th>Data do cadastro</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th>1</th>
                    <td>Joao</td>
                    <td>Mateus</td>
                    <td>johny</td>
                    <td>johny@hotmail.com</td>
                    <td>123123123</td>
                    <td>48545678932</td>
                    <td>48545678932</td>
                </tr>

                <tr>
                    <th>2</th>
                    <td>Jose</td>
                    <td>Silva</td>
                    <td>jsilva</td>
                    <td>Jose@hotmail.com</td>
                    <td>123123123</td>
                    <td>48545678932</td>
                    <td>48545678932</td>
                </tr>

                <tr>
                    <th>3</th>
                    <td>Alan</td>
                    <td>Maia</td>
                    <td>alan_maia</td>
                    <td>alan@hotmail.com</td>
                    <td>123123123</td>
                    <td>48545678932</td>
                    <td>48545678932</td>
                </tr>
            </tbody>
        </table>
    </section><!-- tabela-conteudo -->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>