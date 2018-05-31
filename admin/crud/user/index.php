<?php
require_once '../../../model/database.php';

$list_user = getAllEntity("user");

require_once '../../layout/header.php';
?>

<h1>Gestion des utilisateurs</h1>

<a href="create.php" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</a>

<hr>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Pseudo</th>
            <th>Email</th>
            <th>Password</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list_user as $user) : ?>
            <tr>
                <td><?php echo $user["pseudo"]; ?></td>
                <td><?php echo $user["email"]; ?></td>
                <?php $picture = (!empty($user["picture"])) ? "../../../uploads/" . $user["picture"] : "http://via.placeholder.com/150x150"; ?>
                <td><img src="<?php echo $picture; ?>" class="img-thumbnail"></td>
                <td>
                  <a href="update.php?id=<?php echo $user["id"]; ?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                  <a href="delete_query.php?id=<?php echo $user["id"]; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>  
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once '../../layout/footer.php'; ?>

