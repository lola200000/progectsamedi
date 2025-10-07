<?php
require_once __DIR__ . '/bd.php'; 
$pdo = DataBase::getConnection(); 


function getAllProducts(): array {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM products");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function getProductById(int $id): ?array {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$id]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    return $product ?: null;
}


function addProduct(string $name): bool {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO products (name) VALUES (?)");
    return $stmt->execute([$name]);
}


function updateProduct(int $id, string $name): bool {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE products SET name = ? WHERE id = ?");
    return $stmt->execute([$name, $id]);
}


function deleteProduct(int $id): bool {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
    return $stmt->execute([$id]);
}
