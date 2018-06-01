<?php
require_once __DIR__ . '/../lib/functions.php';

$user = currentUser();
?>

<nav>
    <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Nos Destinations</a></li>
        <li><a href="#">Contact</a></li>
        <?php if (!isset($utilisateur["id"])) : ?>
            <li><a href="#">Login</a></li>
        <?php else: ?>
            <li><a href="#">Mon Compte</a></li>
        <?php endif; ?>
    </ul>
</nav>