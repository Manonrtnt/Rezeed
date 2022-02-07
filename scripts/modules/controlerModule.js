async function queryControler(type , data = null) {
   const response = await fetch 
   (
       `./php/controler.php?type=${type}`, {
           method: 'POST',
           body: data
    });
    const servAnswer = await response.json();                       // Récupére le JSON retourné   

    if (type === "login") {
        localStorage.setItem("UserData", JSON.stringify(servAnswer));   // json to string

        if (servAnswer.check_success) {
            fadeOut();
            location.replace("./indexPlayer.php?");
        } else {
            alert("L'intrusion sur un site sans autorisation est passible de 150 000€ d'amende !!! Vous recevrez l'amende d'ici 3 jours !");  
        }
    }  
   
    if (type === "register") {
        if (servAnswer.check_success) {
            localStorage.setItem("register_success", true); 

            location.reload();
        } else {
            const userFeedbackDiv = document.querySelector("#user_feedback");

            if (servAnswer.login_check === false) {
                let feedback = document.createElement("p");
                feedback.textContent = "Pseudo déja utilisé !";
                feedback.style.color = "red";
                userFeedbackDiv.appendChild(feedback);
            }
            if (servAnswer.email_check === false) {
                let feedback = document.createElement("p");
                feedback.textContent = "Email déja utilisé !";
                feedback.style.color = "red";
                userFeedbackDiv.appendChild(feedback);
            }
        }
    }   
    if (type === "playlist") {
        localStorage.setItem("PlaylistData", JSON.stringify(servAnswer));   // json to string
    }     
    
    return response;
} 