const editButton = document.getElementById('edit-button');
const usernameElement = document.getElementById('username');
const userRoleElement = document.getElementById('user-role');
const userTelefoneElement = document.getElementById('telefone');
const userEmailElement = document.getElementById('e-mail');
const profilePictureElement = document.getElementById('profile-picture');

editButton.addEventListener('click', () => {
    const newUsername = prompt('Digite seu novo nome de usuário:');
    const newRole = prompt('Digite seu novo cargo:');
    const newTelefone = prompt('Digite seu novo telefone:');
    const newEmail = prompt('Digite seu novo e-mail:');
    
    if (newUsername !== null && newUsername !== '') {
        usernameElement.textContent = newUsername;
    }
    
    if (newRole !== null && newRole !== '') {
        userRoleElement.textContent = newRole;
    }
    
    if (newTelefone !== null && newTelefone !== '') {
        userTelefoneElement.textContent = newTelefone;
    }
    
    if (newEmail !== null && newEmail !== '') {
        userEmailElement.textContent = newEmail;
    }
});
