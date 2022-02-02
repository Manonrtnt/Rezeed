(function player() {

   equalizer();                // Front modules

   logIn();


   const userGenre = JSON.parse(localStorage.getItem('UserData')).genre;
   const playlistLink = JSON.parse(localStorage.getItem('PlaylistData'));

   queryControler("playlist", userGenre);
   

   logOut();
})();
