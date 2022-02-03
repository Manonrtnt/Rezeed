<?php
    require "./model/connect.php";
    require "./model/userModel.php";
    require "./model/playlistModel.php";
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
            $failedConstraints = registerUser();
            echo json_encode($failedConstraints);              
            
        }

        if ($_GET["type"] === "login" && $loginData) {
            $data = connectUser();
            echo json_encode($data);             
        }  
        
        //=============// Playlist Branches //===============//
        
        if ($_GET["type"] === "playlist") {

            $genre = file_get_contents('php://input');
            $playlist = fetchPlaylist($genre);

            echo json_encode($playlist);
        }
    }

    function connectUser() {
        $query = readUser();
        $result = $query[0]->fetch();    // Retourn tableau si ok, sinon booleen      
        
        $data = [
            "check_success" => null,
            "login_user" => $_POST['login_user'],
            "genre" => null
        ];
        
        if (is_array($result)) {
            $data["check_success"] = True;                   
            $data["genre"] = $result[0];
        } else {
            $data["check_success"] = False;                       
        }

        return $data;
    }
    function registerUser() {
        $arr = checkDuplicates();

        fileLog(json_encode($_POST["preferences_user"]));
        if ($arr["check_success"]) {
            createUser();
        } 
        return $arr;
    }
    function checkDuplicates() {
        $arr = [];
        $arr["login_check"] = checkPseudo();
        $arr["email_check"] = checkMail();

        if ($arr["login_check"] && $arr["email_check"]) {
            $arr["check_success"] = True;
        } else $arr["check_success"] = False;

        return $arr;
    }

    function fetchPlaylist($genre) {

        $response = readPlaylist($genre);    
        $playlist = [];
        $i = 1;
        while($donnees = $response[0]->fetch()){
  
           // Crée tableau qui a pour clé "track_{i}" et pour valeur un tableau [nom, url]
           $playlist["track_".$i] = [$donnees['name_track'], $donnees['url_track']];      
           $i++;
        }
        return $playlist;
    }
?>