<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../database.php";

$id = $_POST["id"];
$titre = $_POST["titre"];
$image = $_FILES["image"]["name"];

if ($image) {
    // Gérer l'upload du fichier
    move_uploaded_file($_FILES["image"]["tmp_name"], "../../../uploads/pays/" . $image);
} else {
    $pays = getOneRow("pays", $id);
    $image = $pays["image"];
}

updatePays($id, $titre, $image);

header("Location: index.php");