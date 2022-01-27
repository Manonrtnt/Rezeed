<?php
    require "./model/connect.php";
    require "./queries/userQueries.php";
    require "./helpers.php";

    // Selon le type de formulaire, apelle les fonctions correspondantes
    if (isset($_GET["type"])) {
        if ($_GET["type"] === "login") {
            $authorization = connect($returnUser);  // Autorise connection

            if ($authorization) {
                echo True;                          // Echo vers JS
            } else {
                echo False;
            }
        }
                
        if ($_GET["type"] === "register") {
            fileLog("On entre dans php");
            register($createUser);                  // Autorise inscription
        }
   }
?>