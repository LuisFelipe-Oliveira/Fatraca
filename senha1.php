<?php

$msg = "";

if(isset($_POST["enviar"])) {
    require("./config/connect.php");

    $email = $_POST['email'];  

    $sql = "SELECT * FROM fatraca_users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    if($stmt->rowCount() > 0) {
        header('Location: senha2.php');
        exit();
    } else {
        $msg = "Usuário não encontrado!";
    }
    $conn = null;
}   

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/styleSenha1.css">
        <title>Recuperar senha</title>
    </head>

    <body>
        <form method="post" class="fieldset">
            <h1>Recupere sua senha</h1>
            <div class="elementos">
                <label for="email">Digite seu e-mail</label>
                <input type="email" name="email" id="email" placeholder="henri.francisco@gmail.com" required>
            </div>
            <button name="enviar">Próximo</button>
        </form>
    </body>
</html>

<?php echo $msg; ?>