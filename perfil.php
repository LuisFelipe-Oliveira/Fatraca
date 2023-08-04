<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\perfil.css">
    <title>Perfil</title>
</head>
<body>
    <div class="profile">
        <div class="profile-header">
            <img id="profile-picture" src="assets\imgs\perfil.jpg" alt="Perfil">
            <h1 id="username">Rogério Rei Delas</h1>
            <p id="user-role">Administrador</p>
        </div>
        <div class="profile-details">
            <h2>Sobre Mim</h2>
            <p contenteditable="true">Olá! Eu sou um desenvolvedor web apaixonado por criar sites incríveis.</p>
            <h2>Contato</h2>
            <ul class="contact-info">
                <li>Email: <span contenteditable="true" id="e-mail" >exemplo@email.com</span></li>
                <li>Telefone: <span contenteditable="true" id="telefone">(123) 456-7890</span></li>
            </ul>
            <button id="edit-button">Editar Perfil</button>
        </div>
    </div>

    <script src="assets\js\editPerfil.js"></script>
</body>
</html>