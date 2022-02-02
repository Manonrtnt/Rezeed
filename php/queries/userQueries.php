<?php
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
      $result = $response[0]->fetch();    // Retourn tableau si ok, sinon booleen      

      $data = [
         "check_success" => null,
         "login_user" => $_POST['login_user'],
         "genre" => null
      ];

      if (is_array($result)) {
         $data["check_success"] = True;                   
         $data["genre"] = $result[0];
      } else {
         $data["check_success"] = False;                       
      }  

      return $data;
   }

   function register() {           
      $hashed_pw = sha1($_POST['pw_user']);
      
      $arr = checkDuplicates();
      if (!$arr["check_success"]) return $arr;

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

      return $arr;
   }

   function checkPseudo()  {   // Retourne true si pseudo dispo
      $myQuery = 'SELECT * FROM users WHERE login_user = :login_user';
      $resp = queryDatabase($myQuery, array(
         ':login_user' => $_POST['login_user'],
      ));
      $result = $resp[0]->fetch();        
      
      return !is_array($result);
   }
   function checkMail(){      // Retourne true si mail dispo
      $myQuery = 'SELECT * FROM users WHERE email_user = :email_user';   
      $resp = queryDatabase($myQuery, array(
         ':email_user' => $_POST['email_user'],
      ));
      $result = $resp[0]->fetch();        

      return !is_array($result);
   }
   function checkDuplicates() { 
      $arr = [];
      $arr["login_check"] = checkPseudo();
      $arr["email_check"] = checkMail();

      if ($arr["login_check"] && $arr["email_check"]) {
         $arr["check_success"] = True;
      } else $arr["check_success"] = False;

      return $arr;
   }
?>