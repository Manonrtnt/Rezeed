<?php
    require "./model/connect.php";
    require "./queries/userQueries.php";
    require "./helpers.php";

    if (isset($_GET["type"])) {
        if ($_GET["type"] === "login") {
            $authorization = connect($returnUser);

            if ($authorization) {
                echo "Connection autorisée";
            } else {
                echo "Connection interdite";
            }
        }
                
        if ($_GET["type"] === "register") {
            fileLog("On entre dans php");
            register($createUser);
        }
   }
?>