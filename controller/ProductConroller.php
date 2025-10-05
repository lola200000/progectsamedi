<?php

require_once 'model/Product.php';

class ProductController {
    // Un seul produit
    public function show() {
        $product = new Product("Chaise de bureau", 129.99);
        require 'view/productView.php';
    }

    // Liste de plusieurs produits
    public function list() {
        $products = [
            new Product("Chaise de bureau", 129.99),
            new Product("Table de salon", 199.50),
            new Product("Lampe design", 49.99)
        ];
        require 'view/productListView.php';
    }
}
