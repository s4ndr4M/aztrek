<?php
require_once '../../../model/database.php';

$list_guide = getAllEntity("guide");

require_once '../../layout/header.php';
?>

<h1>Nos Guides</h1>

<form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Nom</label>
        <input type="text" id="nom" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="title">Prénom</label>
        <input type="text" id="prenom" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="picture">Photo</label>
        <input type="file" id="picture" name="picture" accept="image/*" class="form-control">
    </div>
    
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>

