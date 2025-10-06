<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$page = $_GET['page'] ?? 'user';

switch ($page) {
    case 'user':
        require 'controller/UserController.php';
        $controller = new UserController();
        $controller->showUser();
        break;

    case 'product':
        require 'controller/ProductController.php';
        $controller = new ProductController();
        $controller->showProduct();
        break;

    case 'products':
        require 'controller/ProductController.php';
        $controller = new ProductController();
        $controller->showProducts();
        break;

    default:
        echo "Page non trouvée.";
}
