<?php
    require "./model/connect.php";
    require "./queries/userQueries.php";
    require "./queries/playlistQueries.php";
    require "../helpers.php";

    $registerData = (
        isset($_POST['name_user']) && isset($_POST['first_name_user']) &&
        isset($_POST['login_user']) && isset($_POST['pw_user']) &&
        isset($_POST['email_user']) && isset($_POST['preferences_user'])
    );
    $loginData = (
        isset($_POST['login_user']) && isset($_POST['pw_user'])
    );

    if (isset($_GET["type"])) {    
        
        //================// User Branches //================//
        
        if ($_GET["type"] === "register" && $registerData) {   
            $arr = json_encode(register());              // Retourne tableau qui contient "success"
            
            echo $arr;   
        }
        if ($_GET["type"] === "login" && $loginData) {
            $data = json_encode(connect());             // Retourne tableau qui contient "success"   
            
            echo $data;
        }  
        
        //=============// Playlist Branches //===============//
        
        if ($_GET["type"] === "playlist") {
            
            $genre = file_get_contents('php://input');
            $playlist = fetchPlaylist($genre);

            echo json_encode($playlist);
        }
   }
?>