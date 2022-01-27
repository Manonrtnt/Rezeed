<?php
   require "./model/connect.php";
   require "./queries/userQueries.php";
   require "./helpers.php";

   if (isset($_GET["type"])) {
       
       if ($_GET["type"] === "login") {
           $res = connect($returnUser);

           echo $res; // 

           // header('Location: ./player.php'); //== Return new page ?!
       }
       
       if ($_GET["type"] === "register") {
           register($createUser);
       }
   }
?>