function connectionForm() {
    const loginForm = document.querySelector("#connexion_form");

    loginForm.addEventListener("submit", (e) => {
        e.preventDefault();
        userQuery("./php/forms.php?type=login", loginForm); // Envoie requête au controleur => index.php
    });
}
function registerForm() {
    const registerForm = document.querySelector("#register_form");
    registerForm.addEventListener("submit", (e) => {
        e.preventDefault();
        
        const pseudo = document.querySelector(`#register_form input[name=login_user]`).value;
        const password = document.querySelector(`#register_form input[name=pw_user]`).value;
        const password2 = document.querySelector(`#register_form input[name=pwd2_user]`).value;
        const failed = validateInfo(pseudo, password, password2);
        
        if (failed.length === 0) {
            userQuery("./php/forms.php?type=register", registerForm); // Envoie requête au controleur => index.php
        }
    });
}
async function userQuery(url, form) {        // Gère les requêtes au controleur => index.php
    const data = new FormData(form);
    const response = await fetch 
    (
        url, {
            method: 'POST',
            body: data
    });   
    console.log(response);
    const servAnswer = await response.text(); // Transforme le retour en texte
    getServerAnswer(servAnswer);              

    return response;
}
async function getServerAnswer(data) {       // Traite le retour des requêtes

    if (data) {
        location.assign("./indexPlayer.php?");    // Redirection de page
    } else {
        alert("Arrétez d'essayer de vous introduire sur notre site !!!");
    }
}