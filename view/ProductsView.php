<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits</title>

</head>
<body>
    <h1>Nos produits : </h1>
<?php foreach ($products as $row) : ?>
    <p>Id produit : <?= htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8') ?></p>
    <p>Nom du produit : <?= htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8') ?></p>
    
    

<?php echo "---------------------------------------------------------\n" ?>

<?php endforeach ?> 

<h2>Ajouter des produits : </h2>

<form action="index.php?action=addproduct" method="post">
    <label>Nom du produit :</label>
    <input type="text" name="name" id="name" /></br>

    
    <button type="submit">Valider</button>
</form>

    <p>
        <a href="?action=users">Retour utilisateurs</a>
    </p>
</body>
</html>
