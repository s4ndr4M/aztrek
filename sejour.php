<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

// declaration des variables
$id = $_GET["id"];
$sejour = getOneEntity("sejour", $id);

// Récupérer la liste des sejours du pays affiché
$list_depart = getAllDepartBySejour($id);

getHeader($sejour["titre"]);
?>

<h2><?php echo $sejour["titre"]; ?></h2>

<p><?php echo $sejour["description"]; ?></p>

<img src="" alt="">

<ul>
    <?php foreach ($list_depart as $depart) : ?>
    <li>
        Date de départ : <?php echo $depart["date_depart"] ?>
        <br>
        Places restantes : <?php echo $depart["nb_places_restantes"] ?> sur <?php echo $depart["nb_places_total"] ?>
    </li>
    <?php endforeach; ?>
</ul>


<?php getFooter(); ?>