<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

// declaration des variables
$id = $_GET["id"];
$pays = getOneEntity("pays", $id);
// Récupérer la liste des sejours du pays affiché
$list_sejours = getAllSejoursByPays($id);
debug($list_sejours);

getHeader($pays["nom"]);
?>

<h2><?php echo $pays["nom"]; ?></h2>

<?php getFooter(); ?>