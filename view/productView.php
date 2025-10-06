<?php
if (!isset($product)) {
    echo "<p style='color:red'>Erreur : produit non trouvé.</p>";
} else {
    echo "<h1>Produit : " . htmlspecialchars($product->title, ENT_QUOTES, 'UTF-8') . " — " . htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8') . " €</h1>";
}
?>
