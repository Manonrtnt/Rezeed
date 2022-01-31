<?php
   require './preparedQueries.php';
   
   // userQueries POO version
   class User {
      public $login;
      public $pw;
      public $name;
      public $first_name;
      public $email;
      public $preferences;

      public function __construct($login, $pw, $name = null, $first_name = null, $email = null, $preferences = null) {
         $this->login = $login;
         $this->pw = $pw;
         $this->name = $name;
         $this->first_name = $first_name;
         $this->email = $email;
         $this->preferences = $preferences;
      }

      public function connect() { 
         $this->password = $_POST['pw_user'];                  
         $hashed_pw = sha1($this->password);    
         
         $connectionCheck = "SELECT * FROM users WHERE login_user = :login_user AND pw_user = :pw_user";
         $response = queryDatabase($connectionCheck, array(      // Si pas de données correspondante => retourne False    
            ':login_user' => $_POST['login_user'],
            ':pw_user' => $hashed_pw
         ));  

         $array = $response[0]->fetch();
         if ($array === False) {
            return False;
         } else {
            return True;
         }
      }
      public function register() {
         $this->password = $_POST['pw_user'];                  
         $hashed_pw = sha1($this->password, false);
         
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

         $affectedRowsCount = $response[1];
         if ($affectedRowsCount === 1) {
            return True;
         } else {
            // Retourner quelles infos sont incorrectes
            return False;
         }
      }

   }
?>