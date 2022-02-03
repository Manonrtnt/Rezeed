async function queryControler(type , data = null) {
   const response = await fetch 
   (
       `./php/controler.php?type=${type}`, {
           method: 'POST',
           body: data
    });
    const servAnswer = await response.json();                       // Récupére le JSON retourné
    console.log("servAnswer : ", servAnswer)
    

    if (type === "register") {
        if (servAnswer.check_success) {
            location.reload();
        } else {
            if (servAnswer.login_check === false) alert("Pseudo indisponible");
            if (servAnswer.email_check === false) alert("Email indisponible");
        }
    }
    if (type === "login") {
        localStorage.setItem("UserData", JSON.stringify(servAnswer));   // json to string

        if (servAnswer.check_success) {
            fadeOut();
            location.replace("./indexPlayer.php?");
        } else {
            alert("L'intrusion sur un site sans autorisation est passible de 150 000€ d'amende !!! Vous recevrez l'amende d'ici 3 jours !");  
        }
    }     
    if (type === "playlist") {
        localStorage.setItem("PlaylistData", JSON.stringify(servAnswer));   // json to string

        // Créer les iframes / boutons de musiques / menu déroulant pour changer de style de playlist.

    }     
    
    return response;
} 