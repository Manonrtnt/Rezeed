
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
   let currentGenre = null;
   
   if (type === "user") {
      await queryControler("playlist", data.target.value);
      currentGenre = data.target.value.toLowerCase();
   } else if (type === "default") {
      await queryControler("playlist", data);
      currentGenre = data.toLowerCase();
   }
   const playlistLink = JSON.parse(localStorage.getItem('PlaylistData'));
    
   themeHandler(currentGenre, playlistLink);
}

async function themeHandler(currentGenre, playlistLink) {
   const h1 = document.querySelector("h1");
   const bars = document.querySelectorAll(".bar");
   const footerLink = document.querySelector("#footerLink");
   const logo = document.querySelector("#logo");  
   const root = "https://www.youtube.com/embed/";
   const buttons = Array.from(document.querySelectorAll(".music_button"));
   const iframe = document.querySelector("iframe");

   const colors =  {
      classical: ['#c3ab94', "#323232", "#c3ab94", "#c3ab94"],
      electro: ['#b4bee0', "#323232", "#b4bee0", "#b4bee0"],
      jazz: ['#f8b840', "#323232", "#f8b840", "#f8b840"],
      pop: ['#CF8DAC', "#323232", "#CF8DAC", "#CF8DAC"],
      rap: ['#db4747', "#FFFEFB", "#db4747", "#FFFEFB"],    
      reggae: ['#9dc062', "#323232", "#9dc062", "#9dc062"],
      rock: ['#323232', "#FFFEFB", "#858585", "#FFFEFB"]
   };
     
   logo.setAttribute("src", `./img/${currentGenre}_logo.svg`);
   for (let bar of bars) {
      bar.setAttribute("style", `fill: ${colors[currentGenre][0]}`);
   }
   h1.setAttribute("style", `background-color: ${colors[currentGenre][0]}; color: ${colors[currentGenre][1]};`);
   for (let button of buttons) {
      button.onmouseover = () => button.style.backgroundColor = colors[currentGenre][2];
      button.onmouseleave = ()  => button.style.backgroundColor = "#323232";
   }
   footerLink.style.color = colors[currentGenre][3];
   footerLink.onmouseover = () => footerLink.style.color = "#ffffff";
   footerLink.onmouseleave = ()  => footerLink.style.color = colors[currentGenre][3];

   iframe.setAttribute("src", `${root}${playlistLink.track_1[1]}`);   
   for (let i = 0; i < buttons.length; i++) {
      buttons[i].setAttribute("Value", playlistLink[`track_${i + 1}`][0]);
      
      buttons[i].addEventListener("click", (e) => {
         e.preventDefault();
         iframe.setAttribute("src", `${root}${playlistLink[`track_${i + 1}`][1]}`);
      })
   }
}

