<?php
   function fetchPlaylist($type) {
      $query = null;
      if ($type === "default") {
         $query = "SELECT * FROM track 
         WHERE login_user = :login_user AND pw_user = :pw_user";
      } else {
         $query = "SELECT * FROM track 
         WHERE login_user = :login_user AND pw_user = :pw_user";
      }
      $response = queryDatabase($query, array(

      ));  
      $array = $response[0]->fetch();
   }
?>