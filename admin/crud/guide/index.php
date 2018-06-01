<?php
require_once '../../../model/database.php';

$list_guide = getAllEntity("pays");

require_once '../../layout/header.php';
?>

<h1>Gestion des Guides</h1>

<a href="create.php" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</a>

<hr>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Photo</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list_guide as $guide) : ?>
            <tr>
                <td><?php echo $guide["firstname"]; ?></td>
                <td><?php echo $guide["lastname"]; ?></td>
                <?php $picture = (!empty($guide["picture"])) ? "../../../uploads/" . $project["picture"] : "http://via.placeholder.com/150x150"; ?>
                <td><img src="<?php echo $picture; ?>" class="img-thumbnail"></td>
                <td><?php echo $project["category"]; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $project["id"]; ?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                    <a href="delete_query.php?id=<?php echo $project["id"]; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

