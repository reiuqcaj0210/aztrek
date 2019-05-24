<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../database.php";



$titre = $_POST["titre"];
$intro = $_POST["intro"];
$image1 = $_FILES["img1"]["name"];
$image2 = $_FILES["img2"]["name"];
$image3 = $_FILES["img3"]["name"];
$recap = $_POST["recap1"];
$niveau = $_POST["difficulte"];
$duree = $_POST["duree"];
$pays_id = $_POST["pays_id"];


// Gérer l'upload du fichier
move_uploaded_file($_FILES["img1"]["tmp_name"], "../../../uploads/sejour/" . $image1);
move_uploaded_file($_FILES["img2"]["tmp_name"], "../../../uploads/sejour/" . $image2);
move_uploaded_file($_FILES["img3"]["tmp_name"], "../../../uploads/sejour/" . $image3);

insertSejour ($titre, $intro, $image1, $image2, $image3, $recap, $niveau, $duree, $pays_id);

header("Location: index.php");