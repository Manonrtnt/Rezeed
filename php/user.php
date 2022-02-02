<?php
    require "./model/connect.php";
    require "./queries/userQueries.php";
    require "../helpers.php";

    $registerData = (
        isset($_POST['name_user']) && isset($_POST['first_name_user']) &&
        isset($_POST['login_user']) && isset($_POST['pw_user']) &&
        isset($_POST['email_user']) && isset($_POST['preferences_user'])
    );
    $loginData = (
        isset($_POST['login_user']) && isset($_POST['pw_user'])
    );

    if (isset($_GET["type"])) {
        if ($_GET["type"] === "register" && $registerData) {             
          

            $authorization = register(); // Autorise inscription
            if ($authorization) {

                // session_start();


                // Retourner le pseudo si besoin

                $res = ["success" => $success, "pseudo" => $pseudo, "email" => $email];
                echo json_encode($res);  

                echo True;
            } 
            else {
                echo False;
            }
        }

        if ($_GET["type"] === "login" && $loginData) {

            $data = connect();             // Autorise connection
            
            if ($data["success"]) {                         // Si utilisateur existe
                echo json_encode($data);                    // Retourne les data vers JS
            } else {
                echo null;
            }
        }
        if ($_GET["type"] === "logout") {
            // Déconnecte
        }
   }
?>