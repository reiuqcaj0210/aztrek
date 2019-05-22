<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../model/database.php";

$label = $_POST["label"];
$picto = $_FILES["picto"]["name"];

// Gérer l'upload du fichier
move_uploaded_file($_FILES["picto"]["tmp_name"], "../../../uploads/services/" . $picto);

insertService($label, $picto);

header("Location: index.php");