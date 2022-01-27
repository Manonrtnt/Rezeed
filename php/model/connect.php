<?php
    function queryDatabase($prepared, $queryArgs = NULL) { 
        $dsn = "mysql:host=localhost;dbname=rezeed";

        // ! Gaffe MDP
        $database = new PDO($dsn, "root", "root", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $database -> exec("set names utf8");

        $query = $database -> prepare($prepared);
        try {
            $success = $query->execute($queryArgs);

            $fichier = fopen("./test.txt", 'w+');
            fwrite($fichier, $success);
            while ($data = $query->fetch()) {
                foreach ($data as $value) {
                    fwrite($fichier, (string) $value . "\n");
                }
            }

        } catch (Exception $e) { 
            die("La requête a échoué !");
        }

        return [$success, $query];
    }
?>