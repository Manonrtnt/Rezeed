(function main() {
    const currentPage = window.location.pathname.toString().toLocaleLowerCase();

    equalizer();                // Front modules
    if (currentPage === "/rezeed/index.php" || currentPage === "/rezeed/") {    // Si sur page d'acceuil
        modalHandler();
    
        connectionForm();       // Form modules
        registerForm();
    } 
    
    else if (currentPage == "/rezeed/indexPlayer.php") {                        // Si sur page player
        logOut();
    }
})();

//==================// CONTROLLER CALL FUNCTION //====================//

async function queryControler(url, type , data = null) {
    const response = await fetch 
    (
        url, {
            method: 'POST',
            body: data
    });
    // JSON
    const servAnswer = await response.json();                   // Récupére le JSON retourné

    localStorage.setItem("UserData", JSON.stringify(servAnswer)); // json to string


    if (type === "register") {
        if (servAnswer.success === false) {
            if (servAnswer.pseudo === false) {
                alert("Pseudo indisponible");
            }
            if (servAnswer.email === false) {
                alert("Email indisponible");
            }
        } else {
            login();
        }
    }
    if (type === "login") {
        if (servAnswer.success === true) {
            localStorage.getItem("UserData");

            logIn();
        } else {
            alert("L'intrusion sur un site sans autorisation est passible de 150 000€ d'amende !!! Vous recevrez l'amende d'ici 3 jours !");
        }
    }     
    if (type === "logout") {
        logOut();
    }
    return response;
}