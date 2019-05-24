<?php
require_once __DIR__ . "/../../../database.php";

$countries = getAllRows("pays");

require_once __DIR__ . "/../../layout/header.php";
?>

<h1>Gestion des pays</h1>

<a href="create.php" class="btn btn-primary">
    <i class="fa fa-plus"></i>
    Ajouter
</a>

<!-- Affichage des erreurs -->
<?php if (isset($_GET["errcode"])): ?>
    <div class="alert alert-danger">
        <i class="fa fa-times"></i>
        <?php if ($_GET["errcode"] == 23000): ?>
            Erreur lors de la suppression.
        <?php else: ?>
            Une erreur est survenue...
        <?php endif; ?>
    </div>
<?php endif; ?>

<hr>

<table class="table table-striped table-bordered">
    <thead class="thead-light">
        <tr>
            <th>Nom</th>
            <th>Photo</th>
            <th class="actions">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($countries as $country) : ?>
            <tr>
                <td><?= $country["titre"]; ?></td>
                <td>
                    <img src="../../../uploads/pays/<?= $country["image"]; ?>" class="img-thumbnail" alt="">
                </td>
                <td class="actions"> 
                    <a href="update.php?id=<?= $country["id"]; ?>" class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                        Modifier
                    </a>
                    <form action="delete_query.php" method="post">
                        <input type="hidden" name="id" value="<?= $country["id"]; ?>">
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                            Supprimer
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once __DIR__ . "/../../layout/footer.php";
?>