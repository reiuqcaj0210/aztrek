<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../database.php";


$titre = $_POST["titre"];
$image = $_FILES["image"]["name"];

// Gérer l'upload du fichier
move_uploaded_file($_FILES["image"]["tmp_name"], "../../../uploads/pays/" . $image);

insertPays($titre, $image);

header("Location: index.php");