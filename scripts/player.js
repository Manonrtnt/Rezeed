
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
async function playlistSwitch(type, data) {
   const root = "https://www.youtube.com/embed/";
   const iframe = document.querySelector("iframe");
   const buttons = Array.from(document.querySelectorAll(".music_button"));
   
   const color =  {
      classical: ['#af8d78', "#323232", "#af8d78", "#af8d78"],
      electro: ['#b4bee0', "#323232", "#b4bee0", "#b4bee0"],
      jazz: ['#f8b840', "#323232", "#f8b840", "#f8b840"],
      pop: ['#CF8DAC', "#323232", "#CF8DAC", "#CF8DAC"],
      rap: ['#db4747', "#FFFEFB", "#db4747", "#db4747"],    
      reggae: ['#9dc062', "#323232", "#9dc062", "#9dc062"],
      rock: ['#323232', "#FFFEFB", "#858585", "#FFFEFB"]
   };
   
   let currentGenre = null;

   if (type === "user") {
      await queryControler("playlist", data.target.value);
      currentGenre = data.target.value.toLowerCase();
   } else if (type === "default") {
      await queryControler("playlist", data);
      currentGenre = data.toLowerCase();
   }
     
   const h1 = document.querySelector("h1");
   const bars = document.querySelectorAll(".bar");
   const footerLink = document.querySelector("#footerLink");
   const logo = document.querySelector("#logo");

   logo.setAttribute("src", `./img/${currentGenre}_logo.svg`);
   for (let bar of bars) {
      bar.setAttribute("style", `fill: ${color[currentGenre][0]}`);
   }
   h1.setAttribute("style", `background-color: ${color[currentGenre][0]}; color: ${color[currentGenre][1]};`);

   footerLink.style.color = color[currentGenre][3];
   for (let button of buttons) {
      button.onmouseover = () => button.style.backgroundColor = color[currentGenre][2];
      button.onmouseleave = ()  => button.style.backgroundColor = "#323232";
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
