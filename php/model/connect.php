<?php
    // Retourne $success qui contient des informations sur le succès de la requête BDD
    // Retourne $query qui permet de traiter les résultat de la requête BDD
    function queryDatabase($prepared, $queryArgs = NULL) { 
        $dsn = "mysql:host=localhost;dbname=rezeed";

        // ! Gaffe MDP
        $database = new PDO($dsn, "root", "root", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $database -> exec("set names utf8");

        $query = $database -> prepare($prepared);

        try {
            $success = $query->execute($queryArgs);
            // fileLog("2er" . $success);

        } catch (Exception $e) { 
            fileLog("Erreur requête SQL !" . $e);
            die("La requête a échoué !");
        }

        return [$success, $query];
    }
?>