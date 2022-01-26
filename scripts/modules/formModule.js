function connectionForm() {
    const loginForm = document.querySelector("form[name=connexion_form]");
    loginForm.addEventListener("submit", (e) => {
        e.preventDefault();
        
        const pseudo = document.querySelector(`form[name=connexion_form] input[name=login_user]`).value;
        const password = document.querySelector(`form[name=connexion_form] input[name=pw_user]`).value;
        const failed = validateInfo(pseudo, password);
        
        if (failed.length === 0) {
            userQuery("login", loginForm); // Envoie à index.php
        }
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
            userQuery("register", registerForm); // Envoie à index.php
        }
    });
}
async function userQuery(type, form) {
    const data = new FormData(form);
    const response = await fetch 
    (
        `./index.php?type=${type}`, {
        method: 'POST',
        body: data
    });

    console.log("response : ", response);
    return response;
}