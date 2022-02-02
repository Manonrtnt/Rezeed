async function logIn() {                           // Traite les connexions en fonction de l'autorisation serveur
    fadeOut();
    setTimeout(() => {                              
        location.replace("./indexPlayer.php?");
    }, 500)
}

function logOut() {                                   // Déconnecte, pas besoin d'autorisation.             
    const logoutButton = document.querySelector("#logoutButton")
    logoutButton.addEventListener("click", () => {
        queryControler("./php/user.php?type=logout", "logout");

        fadeOut();
        setTimeout(() => {                              
            location.replace("./index.php?");
        }, 500)
    });
}