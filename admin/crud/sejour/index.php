<?php
require_once __DIR__ . "/../../../database.php";

$sejours = getAllRows("sejour");

require_once __DIR__ . "/../../layout/header.php";
?>

<h1>Gestion des sejours</h1>

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
            <th>Photo1</th>
            <th>Photo2</th>
            <th>Photo3</th>
            <th>Introduction</th>
            <th>Vous apprécierez</th>
            <th>Niveau</th>
            <th>Durée</th>
            <th class="actions">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($sejours as $sejour) : ?>
            <tr>
                <td><?= $sejour["titre"]; ?></td>
                <td>
                    <img src="../../../uploads/sejour/<?= $sejour["img1"]; ?>" class="img-thumbnail" alt="">
                </td>
                <td>
                    <img src="../../../uploads/sejour/<?= $sejour["img2"]; ?>" class="img-thumbnail" alt="">
                </td>
                <td>
                    <img src="../../../uploads/sejour/<?= $sejour["img3"]; ?>" class="img-thumbnail" alt="">
                </td>
                <td><?= $sejour["intro"]; ?></td>
                <td><?= $sejour["recap1"]; ?></td>
                <td><?= $sejour["difficulte"]; ?></td>
                <td><?= $sejour["duree"]; ?></td>
                <td class="actions"> 
                    <a href="update.php?id=<?= $sejour["id"]; ?>" class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                        Modifier
                    </a>
                    <form action="delete_query.php" method="post">
                        <input type="hidden" name="id" value="<?= $sejour["id"]; ?>">
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