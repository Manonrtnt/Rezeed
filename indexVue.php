<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <script src="./script.js"></script>
   <title>Reezed</title>
</head>
<body>
   <div>
      <form id="connexion_form">
         <h3> Connexion </h3>

         <p>Login</p>
         <input type="text" name="login_user" required>

         <p>Mot de passe</p>
         <input type="text" name="mdp_user" required>

         <input type="submit" value="Conenxion" required>
      </form>

      <form id="register_form">
         <h3>Créer un utilisateur</h3>
         
         <p>Nom </p>
         <input type="text" name="name_user" required>

         <p>Prénom</p>
         <input type="text" name="first_name_user" required>

         <p>Login</p>
         <input type="text" name="login_user" required>

         <p>Mot de passe</p>
         <input type="text" name="mdp_user" required>

         <p>Confirmer mot de passe</p>
         <input type="text" name="mdp_user" required>

         <select name=Preferance>
            <option value=classique>Classique</option>
            <option value=electro>Electro</option>
            <option value=jazz>Jazz</option>
            <option value=Pop>Pop</option>
            <option value=rap>Rap</option>
            <option value=reggae>Reggae</option>
            <option value=rock>Rock</option>
         </select>
         <input type="submit" value="Créer" required>
      </form>
   </div>
</body>
</html>