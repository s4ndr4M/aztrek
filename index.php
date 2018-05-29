<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

// declaration des variables
$list_pays = getAllEntity("pays");

getHeader("Accueil");
?>

<ul>
    <?php foreach ($list_pays as $pays) : ?>
        <li>
            <a href="pays.php?id=<?php echo $pays["id"]; ?>">
                <?php echo $pays["nom"]; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>


<?php getFooter(); ?>