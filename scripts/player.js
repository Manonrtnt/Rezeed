(function player() {

   equalizer();                // Front modules
   logIn();


   const userGenre = JSON.parse(localStorage.getItem('UserData')).genre;
   
   queryControler("playlist", userGenre);
   
   const playlistLink = JSON.parse(localStorage.getItem('PlaylistData'));
   const iframe = document.querySelector("iframe");
   const root = "https://www.youtube.com/embed/";

   iframe.setAttribute("src", `${root}${playlistLink.track_1[1]}`);
   
   console.log(userGenre);
   console.log(playlistLink);

   logOut();
})();
