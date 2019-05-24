<?php 
require_once __DIR__ . "/../../../database.php";

$countries = getAllRows("pays");


require_once __DIR__ . "/../../layout/header.php"; ?>

<h1>Ajout d'un sejour</h1>

<form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nom</label>
        <input type="text" name="titre" class="form-control" placeholder="Nom" required>
    </div>

    <div class="form-group">
        <label>Introduction</label>
        <textarea name="intro" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label>Image1</label>
        <input type="file" name="img1" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Image2</label>
        <input type="file" name="img2" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Image3</label>
        <input type="file" name="img3" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Vous apprécierez</label>
        <textarea name="recap1" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label>Niveau</label>
        <input type="number" name="difficulte" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Duree</label>
        <input type="number" name="duree" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Pays</label>
        <select name="pays_id" class="form-control">
            <?php foreach ($countries as $country) : ?>
                <option value="<?= $country["id"]; ?>">
                    <?= $country["titre"]; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>


    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Ajouter
    </button>
</form>

<?php require_once __DIR__ . "/../../layout/footer.php"; ?>