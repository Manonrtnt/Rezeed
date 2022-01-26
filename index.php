<?php
    // $_SESSION Pour gérer les sessions
    require "./indexVue.php";
    require "./php/connect.php";
    require "./php/preparedQueries.php";
    require "./php/userQueries.php";

    if (isset($_GET["type"])) {
        if ($_GET["type"] === "login") {
            connect($preparedQuery);
        }
        
        if ($_GET["type"] === "register") {
            register($createUser);
        }
    }
?>