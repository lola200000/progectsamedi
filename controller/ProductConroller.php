<?php
require_once __DIR__ . '/../models/products.php';

class ProductController {
    public static function list() {
        $products = getAllProducts();
        require __DIR__ . '/../views/listproduct.php';
    }

    public static function view(int $id) {
        $product = getProductById($id);
        require __DIR__ . '/../views/viewproduct.php';
    }
}
