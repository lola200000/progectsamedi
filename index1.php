<?php
require_once __DIR__ . '/model/usermodel.php';
require_once __DIR__ . '/model/bd.php';
require_once __DIR__ . '/model/productsmodel.php';

require_once __DIR__ . '/header.php';



$page = $_GET['page'] ?? null;
$id = $_GET['id'] ?? null;


if ($page === 'people') {
    $people = getAllPeople();
    require __DIR__ . '/view/listpeople.php';

} elseif ($page === 'person' && $id) {
    $person = getPersonById((int)$id);
    require __DIR__ . '/view/viewpeople.php';

} elseif ($page === 'products') {
    $products = getAllProducts();
    require __DIR__ . '/view/listproduct.php';

} elseif ($page === 'product' && $id) {
    $product = getProductById((int)$id);
    require __DIR__ . '/view/viewproduct.php';


} else {
    echo "<h1>Bienvenue dans le super exercice</h1>";
    echo "<a href='?page=people'> Voir les utilisateurs</a><br><br>";
    echo "<a href='?page=products'> Voir les produits</a>";
}








require_once __DIR__ . '/footer.php';
