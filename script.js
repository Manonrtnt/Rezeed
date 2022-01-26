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

function conformPassword() {
   const pwd1 = document.getElementByName("mdp_user").value;
   const pwd2 = document.getElementByName("pwd2_user").value;
   if (pwd1 != pwd2) {
      alert ("Les mots de passes ne correspondent pas")
      return false;
   } else {
      return true;
   } 
}

function validatePassword(password){
   const validationRegex = /^(?!.* )(?=.*[a-z])(?=.*[A-Z])(?=.*[?!@#$&|~°+*/%=])(?=.*[0-9]).{8}/;
   return validationRegex.test(mdp);
}

function validatePseudo(pseudo) {
   const validationRegex = /^[a-zA-Z]{4,10}[0-9]{0,3}$/; 
   return validationRegex.test(pseudo);
}

function validateInfo() {
   const password = document.getElementByName("mdp_user").value;
   const pseudo = document.getElementByName("login_user").value;

   const failedConstraints = [];
   const toValidate = {
      pseudo: pseudo,
      password: password
   }
   for (let obj of toValidate) {
      if (!validatePseudo(obj.pseudo)) failedConstraints.push("pseudo"); 
      if (!validatePassword(obj.password)) failedConstraints.push("password"); 
   }

   return failedConstraints;
}

