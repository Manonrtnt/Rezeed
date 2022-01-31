(function main() {
    const currentPage = window.location.pathname;

    equalizer();                // Front modules
    if (currentPage === "/Rezeed/index.php" || currentPage === "/Rezeed/") {    // Si sur page d'acceuil
        modalHandler();
    
        connectionForm();       // Form modules
        registerForm();
    } 
    
    else if (currentPage == "/Rezeed/indexPlayer.php") {                        // Si sur page player
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
    const servAnswer = await response.text();                   // Transforme le retour en texte (json mieux ?)
    

    if (type === "login" || type === "register") logIn(servAnswer, "login");     


    return response;
}