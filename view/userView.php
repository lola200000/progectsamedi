<?php
if (!isset($user)) {
    echo "<p style='color:red'>Erreur : utilisateur non trouvé.</p>";
} else {
    echo "<h1>Utilisateur : " . htmlspecialchars($user->name, ENT_QUOTES, 'UTF-8') . "</h1>";
}
?>
