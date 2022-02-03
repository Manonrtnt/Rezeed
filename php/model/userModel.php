<?php
   function readUser() {
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

      return $response;
   }
   function createUser() {           
      $hashed_pw = sha1($_POST['pw_user']);

      $registerCheck =
      "INSERT INTO users (name_user, first_name_user, login_user, pw_user, email_user, id_genre) 
         VALUES (:name_user, :first_name_user, :login_user, :pw_user, :email_user, 
         (SELECT id_genre FROM genre WHERE name_genre = :name_genre))
      ";

      queryDatabase($registerCheck, array(
         ':name_user' => $_POST['name_user'],
         ':first_name_user' => $_POST['first_name_user'],
         ':login_user' => $_POST['login_user'],
         ':pw_user' => $hashed_pw,
         ':email_user' => $_POST['email_user'],
         ':name_genre' => $_POST['preferences_user']
      ));  
   }

   function checkPseudo() {  // Retourne true si pseudo dispo
      $myQuery = 'SELECT * FROM users WHERE login_user = :login_user';
      $resp = queryDatabase($myQuery, array(
         ':login_user' => $_POST['login_user'],
      ));
      $result = $resp[0]->fetch();

      return !is_array($result);
   }
   function checkMail() {   // Retourne true si mail dispo
      $myQuery = 'SELECT * FROM users WHERE email_user = :email_user';
      $resp = queryDatabase($myQuery, array(
         ':email_user' => $_POST['email_user'],
      ));
      $result = $resp[0]->fetch();

      return !is_array($result);
   }
?>