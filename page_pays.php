<?php
require_once "functions.php";
require_once "database.php";


$id  = $_GET["id"]; // Récupérere le paramètre id dans l'url

getHeader( "liste-sejours");

$sejours = getAllDepartsBySejour( $id); // On veut une ligne par rapport à ce qui a été cliqué (il se base sur l'id pour aficher). Par exemple, on est sur la page tous les séjours et on veut afficher un seul séjour et son contenu


?>

<?php getNav(); ?>

<div class="container">

    

    <div class="liste-sejours-pays-content">

        <div class="item-sejour">

                <article class="sejour-1">

                    <img src="./photos-ok-large/galerie/photo-1.svg" alt="">

                    <div class="descriptif">


                        <h2>Mexique</h2>

                        <div class="content-infos-item">
                            <h3>Trésors du Yucatan</h3>

                            <div class="infos-item">
                                <p class="niveau">Niveau 2/5</p>
                                <p class="durée">7 jours</p>
                                <p class="prix">2990€</p>
                            </div>

                            <div class="pitch-item">

                                <ul>
                                    <li>Le Mexique pour les randonneurs</li>
                                    <li>Des treks soutenus mais sans difficulté technique</li>
                                    <li>Un itinéraire original permettant une véritable immersion </li>

                                </ul>
                            </div>

                        </div>

                        <div class="btn-sejour"><a href="sejour.php">En savoir plus</a></div>
                    </div>

                </article>

            




        </div>


    </div>


</div>


<?php getFooter(); ?>