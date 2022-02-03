(function player() {

   equalizer();                // Front modules
   logIn();
   trackControls();
   
   logOut();
})();

async function trackControls() {
   const root = "https://www.youtube.com/embed/";
   const userGenre = JSON.parse(localStorage.getItem('UserData')).genre;
   const iframe = document.querySelector("iframe");
   const buttons = Array.from(document.querySelectorAll(".music_button"));
   
   await queryControler("playlist", userGenre);             // Requête au controlleur
   const playlistLink = JSON.parse(localStorage.getItem('PlaylistData'));

   iframe.setAttribute("src", `${root}${playlistLink.track_1[1]}`);
   
   for (let i=0 ; i<buttons.length ; i++) {
      buttons[i].setAttribute("Value", playlistLink[`track_${i + 1}`][0]);

      buttons[i].addEventListener("click", (e) => {
         e.preventDefault();
         iframe.setAttribute("src", `${root}${playlistLink[`track_${i + 1}`][1]}`);
      })
   }
}
