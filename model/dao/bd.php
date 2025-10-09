<?php

class BaseDeDonnees {

    private static ?PDO $pdo = null;

    public static function getConnexion() {

        if (self::$pdo === null) {
            self::$pdo = new PDO("mysql:host=localhost;dbname=test;", "root", ""); 
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
//  une classe et fichier séparé pour éviter de les répéter
    }   
        return self::$pdo;
    }
}
