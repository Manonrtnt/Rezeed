<?php
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

         queryDatabase($preparedQuery, array(
            ':name_user' => $_POST['name_user'],
            ':first_name_user' => $_POST['first_name_user'],
            ':login_user' => $_POST['login_user'],
            ':pw_user' => $password,
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
         $loginUser = $_POST['login_user'];
         $password = $_POST['pw_user'];                  // ! Hash password here  
      }
   }
?>