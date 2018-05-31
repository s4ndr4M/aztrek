<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

// declaration des variables
$id = $_GET["id"];
$pays = getOneEntity("pays", $id);

// Récupérer la liste des sejours du pays affiché
$list_sejours = getAllSejoursByPays($id);

//debug($list_sejours);

getHeader($pays["nom"]);
?>

<h2><?php echo $pays["nom"]; ?></h2>

<?php foreach ($list_sejours as $sejour) : ?>
    <article>
        <a href="sejour.php?id=<?php echo $sejour["id"]; ?>">
            <h3><?php echo $sejour["titre"]; ?></h3>
        </a>
        <img src="uploads/<?php echo $sejour["photo"]; ?>" alt="<?php echo $sejour["titre"]; ?>">
    </article>
<?php endforeach; ?>

<?php getFooter(); ?>