<?php
require_once "functions.php";
require_once "database.php";

getHeader( "liste-sejours");

$id  = $_GET["id"]; // Récupérere le paramètre id dans l'url

$sejours = getAllSejoursByPays($id);

?>

<?php getNav(); ?>


<div class="container">


<div class="liste-sejours-content ">

    <div class="item-sejour">

        <?php foreach ($sejours as $sejour) : ?>
        <article class="sejour-1">

            <img src="photos-ok-large/<?= $sejour["img1"]; ?>" alt="">

            <div class="descriptif">

                <h2> <?= $sejour["titre"]; ?> </h2>

                <a href="liste_sejours.php?id=<?= $sejour["sejour_id"]; ?>">
                    <?= $sejour["pays_sej"]; ?>
                </a>

                <div class="content-infos-item">

                    <div class="infos-item">
                        
                        <p> <?= $sejour ["duree"] ?> jours </p>

                    </div>

                    <div class="pitch-item">

                        <ul>
                            <li> <?= $sejour ["recap1"] ?></li>
                        </ul>
                    </div>

                </div>

                <div class="btn-sejour"><a href="sejour.php?id=<?= $sejour["id"]; ?>">En savoir plus</a></div>
            </div>

        </article>
        <?php endforeach; ?>





    </div>


</div>





<?php getFooter(); ?>