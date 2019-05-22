<?php
require_once "functions.php";
require_once "database.php";
$id  = $_GET["id"]; // Récupérere le paramètre id dans l'url

$sejours = getOneRow("sejour", $id);
$itineraires= getAllRows("itineraire");
$departs= getAllDepartsBySejour ("depart", $id);

getHeader("sejour", $sejours["photo_bg"]);
?>

<?php getNav(); ?>

<main class="volcans">


    <div class="descriptif ">
        <div class="container">
            <h2> <?= $sejours["titre"]; ?> </h2>
            <div class="descriptif-items">

                <p class="duree"> <?= $sejours ["duree"] ?> jours</p>


                <p class="niveau"> Niveau

                    <?php for($i = 0; $i < 5; $i++) : ?>
                    <?php if ($i < $sejours ["difficulte"]) : ?>
                    X

                    <?php else: ?>
                    O

                    <?php endif; ?>
                    <?php endfor; ?>
                </p>

            </div>
        </div>

    </div>

</main>



<!-- **********ITINERAIRE********** -->

<section class="itineraire-content container">

    <div class="intro">
        <p> <?= $sejours ["intro"] ?> </p>


    </div>


    <div class="titre-itineraire">

        <h1>
            itinéraire
        </h1>

    </div>


    <div class="itineraire">
        <div class="aside-presentation">
            <div class="photos">
                <img src="photos-ok-large/<?= $sejours["img1"]; ?>" alt="">
                <img src="photos-ok-large/<?= $sejours["img2"]; ?>" alt="">
                <img src="photos-ok-large/<?= $sejours["img3"]; ?>" alt="">
            </div>

            <article class="aside">
                <h3>Vous apprécierez</h3>

                <ul class="infos-supp">
                    <li> <?= $sejours ["recap1"] ?></li>
                </ul>
            </article>

        </div>

        <div class="details-sejour">

            <?php foreach ($itineraires as $itineraire): ?>


            <article class="details-sejour">

                <div class="etape-content">

                    <h4> J - <?= $itineraire["jour"] ?> <?= $itineraire["titre"]?> </h4>

                    <p class="etape"> <?= $itineraire["description"]?> </p>

                </div>

                <?php if($itineraire["details"]) : ?>

                <div class="infos-supp">
                    <ul>
                        <li> <?= $itineraire["details"] ?> </li>
                    </ul>
                </div>

                <?php endif; ?>

            </article>

            <?php endforeach ;?>


        </div>

    </div>

    <div class="dates-depart">

        <table class="table-striped table-bordered">
            <thead class="thead-light">

                <tr>
                    <th>Date départ</th>
                    <th>Date retour</th>
                    <th>Nb de places disponibles</th>
                    <th>Prix</th>
                    <th>Action</th>

                </tr>

            </thead>


            <tbody>
                <?php foreach ($departs as $depart) :?>
                <tr>

                    <td><?= $depart["date_depart"]; ?></td>
                    <td><?= $depart["date_retour"]; ?></td>
                    <td><?= $depart["nombre_places"]; ?></td>
                    <td><?= $depart["prix"] . ("€"); ?></td>
                    <td> <button type="submit">Réserver</button> </td>


                </tr>

                <?php endforeach ; ?>
            </tbody>
        </table>

    </div>


</section>

<?php getFooter(); ?>