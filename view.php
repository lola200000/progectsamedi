<?php require __DIR__ . '/../header.php'; ?>

<?php if ($user): ?>
  <h2>Utilisateur : <?= htmlspecialchars($user['nom']) ?></h2>
  <p>âge : <?= htmlspecialchars($user['age']) ?></p>
  <h3>Biographie :</h3>
  <p><?= nl2br(htmlspecialchars($user['biographie'])) ?></p>
<?php else: ?>
  <p>Utilisateur non trouvé.</p>
<?php endif; ?>

<a href="?page=produits">page liste produit</a>

<?php require __DIR__ . '/../footer.php'; ?>
