<?php
    // $_SESSION Pour gérer les sessions
    require "./indexVue.php";
    require "./php/model/connect.php";
    require "./php/queries/userQueries.php";
    require "./php/helpers.php";

    if (isset($_GET["type"])) {
        
        if ($_GET["type"] === "login") {
            connect($returnUser);

            // header('Location: ./player.php'); //== Return new page ?!
        }
        
        if ($_GET["type"] === "register") {
            register($createUser);
        }
    }
?>