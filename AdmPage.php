<?php

try {

    require("./config/connect.php");

    $query = "SELECT * FROM fatraca_users";
    $stmt = $conn->prepare($query);

    $stmt->execute();

    $result = $stmt->fetchAll();

} catch (PDOException $th) {
    echo "Erro: " . $th->getMessage();
}


?>
<!DOCTYPE html>
<html lang="pt-br">

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
                <?php
                foreach ($result as $linha) {
                    echo "<tr>";
                    echo "<td>" . $linha['id'] . "</td>";
                    echo "<td>" . $linha['nome'] . "</td>";
                    echo "<td>" . $linha['sobrenome'] . "</td>";
                    echo "<td>" . $linha['usuario'] . "</td>";
                    echo "<td>" . $linha['email'] . "</td>";
                    echo "<td>" . $linha['senha'] . "</td>";
                    echo "<td>" . $linha['cpf'] . "</td>";
                    echo "<td>" . date('d/m/Y H:i:s', strtotime($linha['data_cadastro'])) . "</td>";
                    echo "</tr>";
                }
                ?>
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