<?php
   function readPlaylist($genre) {
      $query = "SELECT name_track, url_track FROM track
      JOIN genre 
      WHERE genre.id_genre = track.id_genre
      AND genre.name_genre = :genre";

      $response = queryDatabase($query, array(
         ':genre' => $genre
      ));  
      return $response;
   }
?>