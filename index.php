<?php
    require "./indexVue.php";

    if (isset($_GET["type"])) {
        if ($_GET["type"] === "login") {
            $condition = isset($_POST['login_user']) && 
                        isset($_POST['pw_user']);

            if ($condition) {
                $loginUser = $_POST['login_user'];
                $password = $_POST['pw_user'];                  // ! Hash password here

                // Fait nos trucs 
            }
        }
        
        if ($_GET["type"] === "register") {
            $condition = isset($_POST['name_user']) &&
                        isset($_POST['first_name_user']) &&
                        isset($_POST['login_user']) &&
                        isset($_POST['pw_user']) &&
                        isset($_POST['email_user']) &&
                        isset($_POST['preferences_user']);

            if ($condition) {
                $nameUser = $_POST['name_user'];
                $firstNameUser = $_POST['first_name_user'];
                $loginUser = $_POST['login_user'];
                $password = $_POST['pw_user'];                  // ! Hash password here
                $email = $_POST['email_user'];
                $preferencesUser = $_POST['preferences_user'];

                // Fait nos trucs
            }
        }
    }
?>