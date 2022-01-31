async function logIn(data) {                           // Traite les connexions en fonction de l'autorisation serveur
    if (data) {
        fadeOut();
        setTimeout(() => {                              
            location.replace("./indexPlayer.php?");
        }, 500)
    } else {
        alert("Arrétez d'essayer de vous introduire sur notre site !!!");
    }
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