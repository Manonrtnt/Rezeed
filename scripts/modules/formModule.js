//== Comment réussir à récupérer le retour du serveur ? (Identifiants corrects etc)
//== Le controleur renvoie toute la page HTML en retour de nimporte quelle requête :/

function connectionForm() {
    const loginForm = document.querySelector("form[name=connexion_form]");

    loginForm.addEventListener("submit", (e) => {
        e.preventDefault();
        let resp = userQuery("./index.php?type=login", loginForm); // Envoie à index.php

        // if (true) {
        //     location.assign("./player.php"); // or
        // }
    });
}
function registerForm() {
    const registerForm = document.querySelector("form[name=register_form]");
    registerForm.addEventListener("submit", (e) => {
        e.preventDefault();
        
        const pseudo = document.querySelector(`form[name=register_form] input[name=login_user]`).value;
        const password = document.querySelector(`form[name=register_form] input[name=pw_user]`).value;
        const password2 = document.querySelector(`form[name=register_form] input[name=pwd2_user]`).value;
        const failed = validateInfo(pseudo, password, password2);
        
        if (failed.length === 0) {
            userQuery("./index.php?type=register", registerForm); // Envoie à index.php
        }
    });
}
async function userQuery(url, form) {
    const data = new FormData(form);
    const response = await fetch 
    (
        url, {
            method: 'POST',
            body: data
    });
    // const text = await response.text();
    // console.log("text : ", text);
    
    return response;
}