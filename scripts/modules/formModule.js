function connection() {
    const loginForm = document.querySelector("form[name=connexion_form]");
    loginForm.addEventListener("submit", (e) => {
        e.preventDefault();

        const failed = validateInfo("connexion_form");
        if (failed === []) {
            // Envoie à PHP
        }
    });
}

function register() {
    const registerForm = document.getElementsByName("register_form");
    registerForm.addEventListener("submit", (e) => {
        e.preventDefault();

        const failed = validateInfo("register_form");
        if (failed === []) {
            // Envoie à PHP
        }
    });
}