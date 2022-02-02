<?php
   // Retourne données utilisateur si la combinaison Pseudo / Mot de passe est valide // Sinon Tableau vide
   function connect() {
      $hashed_pw = sha1($_POST['pw_user']);    

      $connectionCheck = "SELECT name_genre FROM genre
         JOIN users
         WHERE genre.id_genre = users.id_genre

         AND users.login_user = :login_user 
         AND users.pw_user = :pw_user
      ";
      $response = queryDatabase($connectionCheck, array( 
         ':login_user' => $_POST['login_user'],
         ':pw_user' => $hashed_pw
      ));  

      $userGenre = ($response[0]->fetch())[0];        // Résultat requête => genre préféré si user existe
      $data = [
         "success" => null,
         "pseudo" => $_POST['login_user'],
         "genre" => $userGenre
      ];
      
      if ($userGenre) {
         $data["success"] = True;                   
      }  else {
         $data["success"] = False;                       
      }
      return $data;
   }


   // Retourne True si le pseudo & email est disponible 
   // Sinon retourne "Pseudo" ou "Email"
   function register() {           
      $hashed_pw = sha1($_POST['pw_user']);
      
      $arr = checkDuplicates();
      if (!$arr["success"]) return $arr;

      $registerCheck =
      "INSERT INTO users (name_user, first_name_user, login_user, pw_user, email_user, id_genre) 
         VALUES (:name_user, :first_name_user, :login_user, :pw_user, :email_user, 
         (SELECT id_genre FROM genre WHERE name_genre = :name_genre))
      ";

      $response = queryDatabase($registerCheck, array(
         ':name_user' => $_POST['name_user'],
         ':first_name_user' => $_POST['first_name_user'],
         ':login_user' => $_POST['login_user'],
         ':pw_user' => $hashed_pw,
         ':email_user' => $_POST['email_user'],
         ':name_genre' => $_POST['preferences_user']
      ));  

      return $arr;
   }

   // Vérification pseudo ou email unique
   function checkPseudo()  { // Retourne true si pseudo dispo
      $myQuery = 'SELECT * FROM users WHERE login_user = :login_user';
      $resp = queryDatabase($myQuery, array(
         ':login_user' => $_POST['login_user'],
      ));

      $pseudoExist = ($resp[0]->fetch())[0];        // Résultat requête => genre préféré si user existe

      return !$pseudoExist;
   }
   function checkMail(){      // Retourne true si mail dispo
      $myQuery = 'SELECT * FROM users WHERE email_user = :email_user';   
      $resp = queryDatabase($myQuery, array(
         ':email_user' => $_POST['email_user'],
      ));

      $emailExist = ($resp[0]->fetch())[0];        // Résultat requête => genre préféré si user existe

      return !$emailExist;
   }
   function checkDuplicates() { 
      $arr = [];
      $arr["login_user"] = checkPseudo();
      $arr["email_user"] = checkMail();

      if ($arr["login_user"] && $arr["email_user"]) {
         $arr["success"] = True;
      } else $arr["success"] = False;

      return $arr;
   }
?>