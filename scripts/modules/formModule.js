function connection() {
    const loginForm = document.querySelector("form[name=connexion_form]");

    loginForm.addEventListener("submit", (e) => {
        e.preventDefault();

        const failed = validateInfo("connexion_form");
        console.log("failed : ", failed)
        if (failed === []) {
            // Envoie à PHP
        }
    });
}

function register() {
    const registerForm = document.querySelector("form[name=register_form]");
    registerForm.addEventListener("submit", (e) => {
        e.preventDefault();

        const failed = validateInfo("register_form");
        console.log("failed : ", failed)

        if (failed === []) {
            // Envoie à PHP
        }
    });
}