<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../database.php";

$id = $_POST["id"];
$titre = $_POST["titre"];
$intro = $_POST ["intro"];
$img1 = $_FILES ["img1"]["name"];
$img2 = $_FILES ["img2"]["name"];
$img3 = $_FILES ["img3"]["name"];
$recap = $_POST ["recap1"];
$duree = $_POST ["duree"];
$niveau = $_POST ["difficulte"];
$pays_id = $_POST ["pays_id"];

if ($img1) {

    move_uploaded_file ($_FILES ["img1"]["tmp_name"], "/../../../uploads/sejour" . $img1);
}
    else{
        $sejour = getOneRow ("sejour", $id);
        $img1 = $sejour ["img1"];
    }
    


if ($img2) {

    move_uploaded_file ($_FILES ["img2"]["tmp_name"], "/../../../uploads/sejour" . $img2);
}
    else{
        $sejour = getOneRow ("sejour", $id);
        $img2 = $sejour ["img2"];
    }
    


    if ($img3) {

        move_uploaded_file ($_FILES ["img3"]["tmp_name"], "/../../../uploads/sejour" . $img3);
    }
        else{
            $sejour = getOneRow ("sejour", $id);
            $img3 = $sejour ["img3"];
        }
        
    
    
    



updateSejour($id, $titre, $intro, $img1, $img2, $img3, $recap, $duree, $niveau, $pays_id);

header("Location: index.php");