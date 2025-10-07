<?php if ($product): ?>
    <h2>Détails du produit</h2>
    <p>ID : <?= htmlspecialchars($product['id']) ?></p>
    <p>Nom : <?= htmlspecialchars($product['name']) ?></p>
<?php else: ?>
    <p>Produit introuvable.</p>
<?php endif; ?>

<br>
<a href="?page=products"> Retour à la liste</a>
