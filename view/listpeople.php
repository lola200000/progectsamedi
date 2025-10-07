<?php require __DIR__ . '/../header.php'; ?>

<?php foreach ($people as $p): ?>
  <div class="person">
    <h3><?= htmlspecialchars($p['first_name'] . ' ' . $p['last_name']) ?></h3>
    <p>Âge : <?= htmlspecialchars($p['age']) ?> ans</p>
    <p>Ville : <?= htmlspecialchars($p['city']) ?></p>
  </div>
  <br>
<?php endforeach; ?>

<a href="?page=products">Voir les produits</a>

<?php require __DIR__ . '/../footer.php'; ?>
