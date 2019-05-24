<?php
require_once __DIR__ . "/../../../database.php";

$id = $_GET["id"];

$sejour = getOneRow("sejour", $id);
$countries = getAllRows("pays");

require_once __DIR__ . "/../../layout/header.php";
?>

    <h1>Modification d'un séjour</h1>

    <form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nom</label>
        <input type="text" name="titre" value="<?= $sejour["titre"]; ?>" class="form-control" placeholder="Nom" required>
    </div>

    <div class="form-group">
        <label>Introduction</label>
        <textarea name="intro" cols="30" rows="10"><?= $sejour["intro"]; ?></textarea>
    </div>

    <div class="form-group">
        <label>Image1</label>
        <input type="file" name="img1" class="form-control"><?php if ($sejour["img1"]): ?>
                <img src="../../../uploads/sejour/<?= $sejour["img1"]; ?>" class="img-thumbnail">
            <?php endif; ?>
    </div>

    <div class="form-group">
        <label>Image2</label>
        <input type="file" name="img2" class="form-control">
        <?php if ($sejour["img2"]): ?>
                <img src="../../../uploads/sejour/<?= $sejour["img2"];?>" class="img-thumbnail">
            <?php endif; ?>
    </div>
    
    <div class="form-group">
        <label>Image3</label>
        <input type="file" name="img3" class="form-control"><?php if ($sejour["img3"]): ?>
                <img src="../../../uploads/sejour/<?= $sejour["img3"]; ?>" class="img-thumbnail">
            <?php endif; ?>
    </div>

    <div class="form-group">
        <label>Vous apprécierez</label>
        <textarea name="recap1" cols="30" rows="10"><?= $sejour["recap1"]; ?></textarea>
    </div>

    <div class="form-group">
        <label>Niveau</label>
        <input type="int" name="difficulte" class="form-control" value="<?= $sejour["difficulte"]; ?>" required> 
    </div>

    <div class="form-group">
        <label>Duree</label>
        <input type="int" name="duree" class="form-control" value="<?= $sejour["duree"]; ?>" required>
        
    </div>

    <div class="form-group">
        <label>Pays</label>
        <select name="pays_id" class="form-control">
                <?php foreach ($countries as $country) : ?>

                    <option value="<?= $country["id"]; ?>" >
                        <?= $country["titre"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
    </div>

<input type="hidden" name="id" value =" <?=$sejour ["id"]?> " >
    <button type="submit" class="btn btn-success" >
        <i class="fa fa-check"></i>
        Modifier
    </button>
</form>

<?php require_once __DIR__ . "/../../layout/footer.php"; ?>