<?php
require_once __DIR__ . '/bd.php';
$pdo = DataBase::getConnection();

function getAllPeople() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM people");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getPersonById($id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM people WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
