<?php

class DataBase {
    private static ?PDO $pdo = null;
//3-4 partier obl
    public static function getConnection(): PDO {
        if (self::$pdo === null) {
            $host = 'localhost';
            $dbname = 'test';
            $user = 'root';
            $pass = '';

            try {
                self::$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('Erreur de connexion : ' . $e->getMessage());
            }
        }

        return self::$pdo;
    }
}
