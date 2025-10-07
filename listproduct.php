<?php
 require __DIR__ . '/../header.php'; 
 ?>

<h2>Liste des produits</h2>

<?php
 foreach ($products as $p): ?>
    <p>
        #<?= htmlspecialchars($p['id']) ?> :
        <?= htmlspecialchars($p['name']) ?>
        — <a href="?page=product&id=<?= $p['id'] ?>">Voir</a>
    </p>
<?php endforeach; ?>

<br>
<a href="index.php"> Retour à l'accueil</a>

<?php require __DIR__ . '/../footer.php'; ?>
