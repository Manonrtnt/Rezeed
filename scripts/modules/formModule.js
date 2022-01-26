async function userQuery(type, data) {
    const response = await fetch
        (
            `./index.php?type=${type}`, {
            method: 'POST',
            body: data
        });
    return response;
}

function connection() {
    const loginForm = document.querySelector("form[name=connexion_form]");

    loginForm.addEventListener("submit", (e) => {
        e.preventDefault();
        const formattedFormData = new FormData(loginForm);

        const failed = validateInfo("connexion_form");
        if (failed === []) {
            // Envoie à PHP
            const success = userQuery("login", formattedFormData);
            console.log(success);
        }
    });
}

function register() {
    const registerForm = document.querySelector("form[name=register_form]");
    registerForm.addEventListener("submit", (e) => {
        e.preventDefault();
        const formattedFormData = new FormData(loginForm);

        const failed = validateInfo("register_form");
        if (failed === []) {
            // Envoie à PHP
            const success = userQuery("register", formattedFormData);
            console.log(success);        
        }
    });
}