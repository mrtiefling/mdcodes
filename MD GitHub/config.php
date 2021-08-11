<?php 
        /*
           Attention ! le host => l'adresse de la base de données et non du site !!
        
           Pour ceux qui doivent spécifier le port ex : 
           $bdd = new PDO("mysql:host=HOST;dbname=DB_NAME;charset=utf8;", "LOGIN", "PASS");
           
         */
    try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=;charset=utf8;port=", "", "");
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }