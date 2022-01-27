<?php
   $createUser = "INSERT INTO users SET
      name_user = :name_user, 
      first_name_user = :first_name_user, 
      login_user = :login_user,
      pw_user = :pw_user,
      email_user = :email_user,
      preferences_user = :preferences_user
   ";
   $returnUser = "SELECT * FROM users WHERE login_user = :login_user 
                  AND pw_user = '7aae59ca23176a31e4269b2ec8e2c59a3eb02c90'";

   function register($preparedQuery) {
      $condition = (
         isset($_POST['name_user']) &&
         isset($_POST['first_name_user']) &&
         isset($_POST['login_user']) &&
         isset($_POST['pw_user']) &&
         isset($_POST['email_user']) &&
         isset($_POST['preferences_user'])
      );
      if ($condition) {
         $password = $_POST['pw_user'];                  
         $hashed_pw = sha1($password, false);

         queryDatabase($preparedQuery, array(
            ':name_user' => $_POST['name_user'],
            ':first_name_user' => $_POST['first_name_user'],
            ':login_user' => $_POST['login_user'],
            ':pw_user' => $hashed_pw,
            ':email_user' => $_POST['email_user'],
            ':preferences_user' => $_POST['preferences_user']
         ));
      }
   }

   function connect($preparedQuery) {
      $condition = (
         isset($_POST['login_user']) && 
         isset($_POST['pw_user'])
      );
      
      if ($condition) {
         $password = $_POST['pw_user'];                  
         // $hashed_pw = sha1($password, false);
         
         queryDatabase($preparedQuery, array(
            ':login_user' => $_POST['login_user'],
            // ':pw_user' => $hashed_pw
         ));
         
         // if ($resp[]) {
         //    return True;
         // }
         // else {
         //    return False;
         // }

      }
   }
?>