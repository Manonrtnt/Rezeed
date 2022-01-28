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
   // Sinon retourne "Pseudo" ou "Email"
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

         $resp = getIdGenre($_POST['preferences_user']); 
         fileLog($resp);

         // queryDatabase($registerCheck, array(
         //    ':name_user' => $_POST['name_user'],
         //    ':first_name_user' => $_POST['first_name_user'],
         //    ':login_user' => $_POST['login_user'],
         //    ':pw_user' => $hashed_pw,
         //    ':email_user' => $_POST['email_user'],
         //    ':preferences_user' => $idGenre
         // ));
      }
   }

   function getIdGenre($str) {        
      $fetchId = "SELECT id_genre FROM genre 
         WHERE name_genre = :name_genre"; 

      $resp = queryDatabase($fetchId, array(
         ':name_genre' => $str
      ));
      return $resp[0];
   }
?>