<?php  
require_once "functions.php";
require_once "database.php";

$countries = getAllRows("pays");


?>


<!-- $$$$$$$$$$$$$$$$$$$$$$-----MAIN NAV-----$$$$$$$$$$$$$$$$$$$$$ -->

<nav class="main-nav stellarnav">


    <ul>
        <li><a href="">Nos destinations</a>

            <ul>
                <?php foreach ($countries as $country) : ?>
                <li>
                    <a href="liste_sejours.php?id=<?= $country["id"]; ?>">
                        <?= $country["titre"]; ?>
                    </a>
                </li>
                <?php endforeach; ?>
                <li><a href="liste_sejours.php">Tous les séjours</a></li>
            </ul>

        </li>

        <li><a href="">Préparez votre voyage</a>
            <ul>
                <li><a href="#">Mexique</a></li>
                <li><a href="#">Guatemala</a></li>
                <li><a href="#">Costa Rica</a></li>
                <li><a href="#">Salvador</a></li>
                <li><a href="#">Honduras</a></li>
            </ul>
        </li>

        <li><a href="">La communauté</a>
            <ul>
                <li><a href="#">Forum</a></li>
                <li><a href="#">Retour de voyages</a></li>
                <li><a href="#">Les rencontres Aztrek</a></li>
                <li><a href="#">Avis de voyageurs</a></li>
            </ul>
        </li>

        <li><a href="">Qui sommes-nous?</a>
            <ul>
                <li><a href="#">L'Agence</a></li>
                <li><a href="#">L'équipe</a></li>
                <li><a href="#">Nos actualités</a></li>
            </ul>
        </li>

        <li><a href="#">Contact</a>

        </li>
    </ul>
</nav>


<!-- $$$$$$$$$$$$$$$$$$$$$$----- FIN MAIN NAV-----$$$$$$$$$$$$$$$$$$$$$ -->