<?php
   function fetchPlaylist($genre) {
      $query = "SELECT * FROM track
      JOIN genre 
      WHERE genre.id_genre = track.id_genre
      AND genre.name_genre = :" . $genre;

      $response = queryDatabase($query, array(

      ));  
      $array = $response[0]->fetch();

      return ["azrZF", "azfafnNz", "zzgEN"];
   }
   fetchPlaylist("Classique");
?>