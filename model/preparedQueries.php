<?php
   //============== USER QUERIES =====================//

   $createUser = "INSERT INTO user SET
      name_user = :name_user, 
      first_name_user = :first_name_user, 
      login_user = :login_user,
      pw_user = :pw_user,
      email_user = :email_user,

      preferences_user = :preferences_user
   ";
   $returnUser = "SELECT * FROM user 
      WHERE login_user = :login_user
   ";
   $updateUser = "";

   //============== PLAYLIST QUERIES =====================//

   $createPlaylist = "INSERT INTO playlist SET";
   $returnPlaylist = "SELECT * FROM playlist";
   $updatePlaylist = "";


?>