<?php

require_once __DIR__ . '/../Product.php';


class ProductDao {

    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAllProducts() {

        $query = "SELECT * FROM `Products`"; 
        $stmt = $this->pdo->prepare($query); 
        $stmt->execute(); 
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        
        $products = [];

        foreach ($data as $row) {
            $product = new Product($row["id"],   $row["name"]);
            $products[] = $row;
        }
        return $products;  
    }

    public function getProductById(int $id) {
        $query = "SELECT * FROM `Products` WHERE id = :id";
        $stmt = $this->pdo->prepare($query); // Tu prépares
        $stmt->execute(['id' => $id]); // Tu exécutes
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function deleteProduct(int $id) {
        $query = "DELETE FROM `Products` WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(['id' => $id]);
    }

    public function addProduct($name) {
        $query = "INSERT INTO `Products` (name ) VALUES (:name)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(['name' => $name]);
    } 

      public function updateProduct($id, $name) {
        $query = "UPDATE `Products` SET name = :name WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(['id' => $id, 'name' => $name]);
    } 
}
