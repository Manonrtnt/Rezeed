<?php
    // $_SESSION Pour gérer les sessions
    require "./indexVue.php";
    require "./model/connect.php";
    require "./model/preparedQueries.php";
    require "./model/userQueries.php";

    if (isset($_GET["type"])) {
        if ($_GET["type"] === "login") {
            connect($preparedQuery);
        }
        
        if ($_GET["type"] === "register") {
            register($createUser);
        }
    }
?>