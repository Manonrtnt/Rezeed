<?php
   $createUser = "INSERT INTO user SET
      name_user = :name_user, 
      first_name_user = :first_name_user, 
      login_user = :login_user,
      pw_user = :pw_user,
      email_user = :email_user,
      preferences_user = :preferences_user
   ";
   $returnUser = "SELECT * FROM user 
      WHERE login_user = :login_user AND pw_user = :pw_user
   ";

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
         $password = $_POST['pw_user'];                  // ! Hash password here
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
         $password = $_POST['pw_user'];                  // ! Hash password here  
         $hashed_pw = sha1($password, false);
         $resp = queryDatabase($preparedQuery, array(
            ':login_user' => $_POST['login_user'],
            ':pw_user' => $hashed_pw
         ));

         // if (user correspond) {
         //    return 1;
         // }
         // else (user correspond) {
         //    return 0;
         // }

      }
   }
?>