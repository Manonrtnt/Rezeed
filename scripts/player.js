
(function player() {
   
   equalizer();                // Front modules
   logIn();
   trackControls();
   
   logOut();
})();


async function trackControls() {
   const select = document.querySelector("select")
   const defaultGenre = JSON.parse(localStorage.getItem('UserData')).genre;

   playlistSwitch("default", defaultGenre);

   select.addEventListener("change", function (e) {    
      playlistSwitch("user", e);
   });
}
async function playlistSwitch(type, data = null) {
   const root = "https://www.youtube.com/embed/";
   const iframe = document.querySelector("iframe");
   const buttons = Array.from(document.querySelectorAll(".music_button"));

   if (type === "user") {
      await queryControler("playlist", data.target.value);
   } else if (type === "default") {
      await queryControler("playlist", data);
   }

   const playlistLink = JSON.parse(localStorage.getItem('PlaylistData'));

   iframe.setAttribute("src", `${root}${playlistLink.track_1[1]}`);      
   for (let i = 0; i < buttons.length; i++) {
      buttons[i].setAttribute("Value", playlistLink[`track_${i + 1}`][0]);

      buttons[i].addEventListener("click", (e) => {
         e.preventDefault();
         iframe.setAttribute("src", `${root}${playlistLink[`track_${i + 1}`][1]}`);
      })
   }
}