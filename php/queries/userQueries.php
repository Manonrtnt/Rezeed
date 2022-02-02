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

      if ($userGenre) {
         $data = [
            "success" => True,
            "pseudo" => $_POST['login_user'],
            "genre" => $userGenre
         ];
         return $data;                             // Retourne les data utilisateur
      }  else {
         return [];                                // Sinon tableau vide
      }
   }


   // Retourne True si le pseudo & email est disponible 
   // Sinon retourne "Pseudo" ou "Email"
   function register() {           
      $hashed_pw = sha1($_POST['pw_user']);
      
      //== Todo: Check si login_user et email => disponible // Et retourner le/les éléments indisponibles
      //== Insère dans table users et remplace le nom entré en input par l'id table genre // Fonctionnel
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



      // if () {              // Pas de problêmes
      //    return [];
      // } else {             // Retourner quelles infos sont incorrectes

      //    $data = [
      //       "pseudo" => False,       // True si disponible, false sinon
      //       "email" => False
      //    ];

      //    return $data;
      // }
   }


?>