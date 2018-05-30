<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire
$id = $_POST["id"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];

$member = getOneEntity("member", $id);
$picture = $member["picture"]; // Image présente avant update

// Vérifier si l'utilisateur a uploadé un fichier
if (isset($_FILES["picture"])) {
    $picture = $_FILES["picture"]["name"];
    // Déplacer le fichier uploadé
    move_uploaded_file($_FILES["picture"]["tmp_name"], "../../../uploads/" . $picture);
}

// Insertion des données en BDD
insertMember($firstname, $lastname, $picture);

// Redirection vers la liste
header("Location: index.php");
