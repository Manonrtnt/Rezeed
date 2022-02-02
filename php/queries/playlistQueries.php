<?php
   function fetchPlaylist($genre) {
      $query = "SELECT name_track, url_track FROM track
      JOIN genre 
      WHERE genre.id_genre = track.id_genre
      AND genre.name_genre = :genre";

      $response = queryDatabase($query, array(
         ':genre' => $genre
      ));  
      $playlist = [];
      $i = 1;
      while($donnees = $response[0]->fetch()){

         // Crée tableau qui a pour clé "Nom de la musique" et pour valeur l'URL Youtube
         $playlist["track_".$i] = [$donnees['name_track'], $donnees['url_track']];      
         $i++;
      }

      return $playlist;
   }
?>