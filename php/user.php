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
          
            $authorization = register();            // Autorise inscription
            if ($authorization) {

                // session_start();

                // fileLog($_SESSION);





                echo True;                          // Retourne vers JS et redirige vers player.php
            } else {
                echo False;
            }
        }

        if ($_GET["type"] === "login" && $loginData) {

            $authorization = connect();             // Autorise connection
            if ($authorization) {
                echo True;                          // Retourne vers JS et redirige vers player.php
            } else {
                echo False;
            }
        }
        if ($_GET["type"] === "logout") {
            // Déconnecte
        }
   }
?>