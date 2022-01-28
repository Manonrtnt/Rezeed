<?php
   require "./model/connect.php?";
   require "./queries/playlistQueries.php?";
   require "../helpers.php";

   if ($_GET["type"] === "default") {
      $url = fetchPlaylist("default");
      return $url;
   } else {
      if ($_GET["type"] === "Classique") {
         fetchPlaylist("Classique");
      }
      if ($_GET["type"] === "Electro") {}
      if ($_GET["type"] === "Jazz") {}
      if ($_GET["type"] === "Pop") {}
      if ($_GET["type"] === "Rap") {}
      if ($_GET["type"] === "Reggea") {}
      if ($_GET["type"] === "Rock") {}
   }
?>