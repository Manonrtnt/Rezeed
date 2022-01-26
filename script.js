const form = document.querySelector("#form");

form.addEventListener("submit", (e) => {
   e.preventDefault();

   const formattedFormData = new FormData(form);
   userQuery(formattedFormData);
});

async function userQuery(data) {
   const response = await fetch                    
   (
      `./index.php?`, {      
         method: 'POST',
         body: data
   });

   return response;
}