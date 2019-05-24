<?php
require_once __DIR__ . "/../../../database.php";

$id = $_GET["id"];

$pays = getOneRow("pays", $id);

require_once __DIR__ . "/../../layout/header.php";
?>

    <h1>Modification d'un pays</h1>

    <form action="update_query.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nom</label>
            <input type="text" name="titre" value="<?= $pays["titre"]; ?>" class="form-control" placeholder="Nom" required>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
            <?php if ($pays["image"]): ?>
                <img src="../../../uploads/pays/<?= $pays["image"]; ?>" class="img-thumbnail">
            <?php endif; ?>
        </div>
        <input type="hidden" name="id" value="<?= $pays["id"]; ?>">
        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i>
            Modifier
        </button>
    </form>

<?php require_once __DIR__ . "/../../layout/footer.php"; ?>