<?php
    require "./model/connect.php";
    require "./queries/userQueries.php";
    require "./helpers.php";

    // Apelle les fonctions correspondantes selon le type de formulaire
    if (isset($_GET["type"])) {
        if ($_GET["type"] === "login") {
            $authorization = connect();             // Autorise connection

            if ($authorization) {
                echo True;                          // Retourne vers JS et redirige vers player.php
            } else {
                echo False;
            }
        }
                
        if ($_GET["type"] === "register") {
            $authorization = register();            // Autorise inscription

            if ($authorization) {

                // Après inscription, connection automatique ?
                echo True;                          // Retourne vers JS et redirige vers player.php
            } else {
                echo False;
            }
        }
   }
?>