function connectionForm() {
    const loginForm = document.querySelector("#connexion_form");

    loginForm.addEventListener("submit", (e) => {
        e.preventDefault();

        const data = new FormData(loginForm);
        queryControler("login", data); // ===>> Envoie requête au controleur
    });
}
function registerForm() {
    const registerForm = document.querySelector("#register_form");
    const userFeedbackDiv = document.querySelector("#user_feedback");
    registerForm.addEventListener("submit", (e) => {
        e.preventDefault();
        userFeedbackDiv.textContent = "";

        const pseudo = document.querySelector(`#register_form input[name=login_user]`).value;
        const password = document.querySelector(`#register_form input[name=pw_user]`).value;
        const password2 = document.querySelector(`#register_form input[name=pwd2_user]`).value;
        const failed = validateInfo(pseudo, password, password2);
        
        if (failed.length === 0) {
            const data = new FormData(registerForm);
            queryControler("register", data); // ===>> Envoie requête au controleur
        } else {
            let feedback = document.createElement("p");
            feedback.textContent = `${failed} invalide !`;
            feedback.style.color = "red";
            userFeedbackDiv.appendChild(feedback);
        }
    });
}