function logIn() {                           // Traite les connexions en fonction de l'autorisation serveur
    const userNameSpan = Array.from(document.querySelectorAll(".user_pseudo"));
    const userData = JSON.parse(localStorage.getItem('UserData'));

    for (let span of userNameSpan) {
        span.textContent = userData.login_user;
    }
}

function logOut() {                                   // Déconnecte, pas besoin d'autorisation.             
    const logoutButton = document.querySelector("#logoutButton")
    logoutButton.addEventListener("click", () => {
        fadeOut();
        location.replace("./index.php?");
        storage.clear();
    });
}