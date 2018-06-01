<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$guide = getOneEntity("guide", $id);

require_once '../../layout/header.php';
?>

<h1>Modifier un Guide</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="lastname">Nom</label>
        <input type="text" id="lastname" name="firstname" value="<?php echo $guide["lastname"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="firstname">Prénom</label>
        <input type="text" id="firstname" name="lastname" value="<?php echo $guide["firstname"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="picture">Photo</label>
        <input type="file" id="picture" name="picture" accept="image/*" class="form-control">
        <?php if (!empty($guide["picture"])) : ?>
            <img src="../../../uploads/<?php echo $guide["picture"]; ?>" class="img-thumbnail">
        <?php endif; ?>
    </div>
    <input type="hidden" name="id" value="<?php echo $guide["id"]; ?>">
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>
