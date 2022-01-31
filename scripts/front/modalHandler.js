function modalHandler() {
   const allButtons = document.querySelectorAll("button");
   const allModals = document.querySelectorAll(".modal");
   const closeIcon = document.querySelectorAll(".cross");

	for (let i=0 ; i<allButtons.length ; i++) {
		allButtons[i].addEventListener("click", () => {
			allModals[i].style.visibility = "visible";
			allModals[i].style.opacity = "100";
		})
	}

   window.addEventListener("mousedown", (e) => {	
      for (let i=0 ; i<allModals.length ; i++) {
         if ( e.target === closeIcon[0] || e.target === closeIcon[1]) {
            allModals[i].style.opacity = '0';
            allModals[i].style.visibility = 'hidden';
         }
      }
	});
}
