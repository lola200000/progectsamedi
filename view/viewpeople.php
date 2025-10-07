<?php require __DIR__ . '/../header.php'; ?>

<?php if ($person): ?>
  <h2><?= htmlspecialchars($person['first_name'] . ' ' . $person['last_name']) ?></h2>
  <p>Âge : <?= htmlspecialchars($person['age']) ?> ans</p>
  <p>Ville : <?= htmlspecialchars($person['city']) ?></p>
  <p>Email : <a href="mailto:<?= htmlspecialchars($person['email']) ?>"><?= htmlspecialchars($person['email']) ?></a></p>
<?php else: ?>
  <p>Personne non trouvée.</p>
<?php endif; ?>

<a href="?page=products">Page liste produits</a>

<?php require __DIR__ . '/../footer.php'; ?>
