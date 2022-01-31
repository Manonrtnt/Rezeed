function fadeOut() {
   const header = document.querySelector("header");
   const footer = document.querySelector("footer");
   const main = document.querySelector("main");

   footer.style.animation = "fadeOut 0.5s forwards";
   header.style.animation = "fadeOut 0.5s forwards";
   main.style.animation = "fadeOut 0.5s forwards";
}