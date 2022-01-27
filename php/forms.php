<?php
   require "./model/connect.php";
   require "./queries/userQueries.php";
   require "./helpers.php";

   if (isset($_GET["type"])) {
       
       if ($_GET["type"] === "login") {
           fileLog("On entre dans php");
           connect($returnUser);

        //    if ($res) {
        //        echo "connection autorisée";
        //    } else {
        //        echo "connection interdite";
        //    }
       }
       
       if ($_GET["type"] === "register") {
           register($createUser);
       }
   }
?>