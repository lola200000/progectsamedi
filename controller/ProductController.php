<?php

require_once __DIR__ . '/../model/dao/ProductDao.php';
require_once __DIR__ . '/../model/Product.php'; 

class ProductController {

    public $productDao;

    public function __construct($productDao) {
        $this->productDao = $productDao;
    }

    public function displayAllProducts() {
        $products = $this->productDao->getAllProducts();
        require_once __DIR__ . '/../view/ProductsView.php';
    }

    public function displayOneProduct() {
            $id = $_GET['id'] ?? null;
            if ($id) {
            $productData = $this->productDao->getProductById($id);
            require "view/ProductView.php";
        }
    }

    public function addProduct() {
        $name = $_POST['name '] ?? '';
        $this->productDao->addProduct($name );
        header("Location: index.php?action=products");
        exit;
    }

    public function deleteProduct() { 
        $id = $_POST['deleteproduct'] ?? 0;
        if ($id) {
        $this->productDao->deleteProduct($id);
        } 
        header("Location: index.php?action=products");
        exit;
    }

        public function updateProduct() {
        $id = (int) ($_POST['updateproduct'] ?? 0);
        $name = $_POST['name'] ?? '';
        
        
        $this->productDao->updateProduct($id, $name);
        header("Location: index.php?action=products");
        exit;
        }

}
