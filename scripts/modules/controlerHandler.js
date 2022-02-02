async function queryControler(type , data = null) {
   const response = await fetch 
   (
       `./php/controler.php?type=${type}`, {
           method: 'POST',
           body: data
    });

    //Uncaught (in promise) SyntaxError: Unexpected end of JSON input
    const servAnswer = await response.json();                       // Récupére le JSON retourné
    localStorage.setItem("UserData", JSON.stringify(servAnswer));   // json to string

    if (type === "register") {
       if (servAnswer.check_success === false) {
           if (servAnswer.login_check === false) {
               alert("Pseudo indisponible");
           }
           if (servAnswer.email_check === false) {
               alert("Email indisponible");
           }
       } else {
           location.reload();
       }
    }
    if (type === "login") {
       if (servAnswer.check_success === true) {
           fadeOut();
           location.replace("./indexPlayer.php?");            
       } else {
           alert("L'intrusion sur un site sans autorisation est passible de 150 000€ d'amende !!! Vous recevrez l'amende d'ici 3 jours !");
       }
    }     

    
    return response;
} 