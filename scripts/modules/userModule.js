function logIn() {                           // Traite les connexions en fonction de l'autorisation serveur
    const userNameSpan = Array.from(document.querySelectorAll(".user_pseudo"));
    const userData = JSON.parse(localStorage.getItem('UserData'));

    for (let span of userNameSpan) {
        span.textContent = userData.login_user;
    }
}

function logOut() {  
    console.log("test");                                 // Déconnecte, pas besoin d'autorisation.             
    const logoutButton = document.querySelector("#logoutButton")
    logoutButton.addEventListener("click", () => {
        window.localStorage.clear();
        fadeOut();
        location.replace("./index.php?");
    });
}

function registerFeedback() {
    const div = document.querySelector("#success_feedback");
    const storageTest = localStorage.getItem("register_success");
 
    if (storageTest) {
       div.textContent = "Inscription réussie !";
       div.style.color = "#FFD769";
       div.style.fontSize = "1.2rem";
    };
 }