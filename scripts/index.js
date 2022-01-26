// const formattedFormData = new FormData(form);
// const registerForm = document.getElementsByName("register_form");

const loginForm = document.querySelector("form[name=connexion_form]");

loginForm.addEventListener("submit", (e) => {
   e.preventDefault();

   const failed = validateInfo("connexion_form");
   console.log("failed : ", failed);
});

// registerForm.addEventListener("submit", (e) => {
//    e.preventDefault();

//    const failed = validateInfo("connexion");
//    console.log("failed : ", failed);
// });

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
   const pwd1 = document.getElementsByName("pw_user").value;
   const pwd2 = document.getElementsByName("pwd2_user").value;
   if (pwd1 != pwd2) {
      alert ("Les mots de passes ne correspondent pas")
      return false;
   } else {
      return true;
   } 
}

function validatePassword(password){
   const validationRegex = /^(?!.* )(?=.*[a-z])(?=.*[A-Z])(?=.*[?!@#$&|~°+*/%=])(?=.*[0-9]).{8}/;
   return validationRegex.test(password);
}

function validatePseudo(pseudo) {
   const validationRegex = /^[a-zA-Z]{4,10}[0-9]{0,3}$/; 
   return validationRegex.test(pseudo);
}

function validateInfo(type) {

   const pseudo = document.querySelector(`form[name=${type}] input[name=login_user]`).value;
   const password = document.querySelector(`form[name=${type}] input[name=pw_user]`).value;
   const failedConstraints = [];

   if (!validatePseudo(pseudo)) failedConstraints.push("pseudo"); 
   if (!validatePassword(password)) failedConstraints.push("password"); 

   return failedConstraints;
}

