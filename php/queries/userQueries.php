<?php

   // Retourne True si la combinaison Pseudo / Mot de passe est valide // Sinon Faux
   function connect() {
      $condition = (
         isset($_POST['login_user']) && 
         isset($_POST['pw_user'])
      );
      
      if ($condition) {
         $connectionCheck = "SELECT * FROM users WHERE login_user = :login_user AND pw_user = :pw_user";
         
         $password = $_POST['pw_user'];                  
         $hashed_pw = sha1($password);    
   
         $response = queryDatabase($connectionCheck, array(      // Si pas de données correspondante => retourne False    
            ':login_user' => $_POST['login_user'],
            ':pw_user' => $hashed_pw
         ));  
         $array = $response[1]->fetch();
         
         if ($array === False) {
            return False;
         } else {
            return True;
         }
      }
   }
   // Retourne True si le pseudo / email / mot de passe est disponible 
   // Sinon retourne "Peudo" ou "Email"
   function register() {
      $condition = (
         isset($_POST['name_user']) &&
         isset($_POST['first_name_user']) &&
         isset($_POST['login_user']) &&
         isset($_POST['pw_user']) &&
         isset($_POST['email_user']) &&
         isset($_POST['preferences_user'])
      );
      //== Todo: Check si login_user et email => disponible
      if ($condition) {  
         $registerCheck = "INSERT INTO users SET         
         name_user = :name_user, 
         first_name_user = :first_name_user, 
         login_user = :login_user,
         pw_user = :pw_user,
         email_user = :email_user,
         id_genre = :preferences_user
         ";

         $password = $_POST['pw_user'];                  
         $hashed_pw = sha1($password, false);
         
         if ($_POST['preferences_user'] === "Classique") $idGenre = 1;
         if ($_POST['preferences_user'] === "Electro") $idGenre = 2;
         if ($_POST['preferences_user'] === "Jazz") $idGenre = 3;
         if ($_POST['preferences_user'] === "Pop") $idGenre = 4;
         if ($_POST['preferences_user'] === "Rap") $idGenre = 5;
         if ($_POST['preferences_user'] === "Reggae") $idGenre = 6;
         if ($_POST['preferences_user'] === "Rock") $idGenre = 7;
         
         fileLog($idGenre);

         queryDatabase($registerCheck, array(
            ':name_user' => $_POST['name_user'],
            ':first_name_user' => $_POST['first_name_user'],
            ':login_user' => $_POST['login_user'],
            ':pw_user' => $hashed_pw,
            ':email_user' => $_POST['email_user'],
            ':preferences_user' => 1
         ));
      }
   }
?>