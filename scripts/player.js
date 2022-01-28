(() => {
   defaultPlaylist();
})();

function defaultPlaylist() {
   userQuery("./php/player.php?type=default");
}

async function userQuery(url) {        // Gère les requêtes au controleur => index.php
   const response = await fetch 
   (
       url, {
           method: 'POST',
           body: data
   });

   console.log(response);
   const servAnswer = await response.text(); // Transforme le retour en texte
   getServerAnswer(servAnswer);              

   return response;
}
async function getServerAnswer(data) {       // Traite le retour des requêtes
   console.log("Réponse serveur :" + data)
}



// function choosedPlayer() {
//    userQuery("./php/player.php?type=Classique");
// }