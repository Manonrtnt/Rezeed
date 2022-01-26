<?php
    require "./indexVue.php";
    require "./model/connect.php";
    require "./model/preparedQueries.php";

    // $_SESSION
    
    if (isset($_GET["type"])) {
        if ($_GET["type"] === "login") {
            $condition = isset($_POST['login_user']) && 
            isset($_POST['pw_user']);
            
            if ($condition) {
                $loginUser = $_POST['login_user'];
                $password = $_POST['pw_user'];                  // ! Hash password here
                
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

                queryDatabase($createUser, array(
                    ':name_user' => $_POST['name_user'],
                    ':first_name_user' => $_POST['first_name_user'],
                    ':login_user' => $_POST['login_user'],
                    ':pw_user' => $_POST['pw_user'],
                    ':email_user' => $_POST['email_user'],
                    ':preferences_user' => $_POST['preferences_user']
                ));
            }
        }
    }
?>