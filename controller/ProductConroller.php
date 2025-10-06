<?php
require_once 'model/Product.php';

class ProductController {
    public function showProduct() {
        $product = new Product("Téléphone", 899);
        require 'view/productView.php';
    }

    public function showProducts() {
        $products = [
            new Product("Ordinateur", 1200),
            new Product("Clavier", 59),
            new Product("Écran", 220)
        ];
        require 'view/productListView.php';
    }
}
