<?php
require_once "functions.php";
require_once "database.php";


$countries = getAllRows ("pays");


getHeader( "Accueil");
?>

<?php getNav(); ?>



<!-- $$$$$$$$$$$$$$$$$$$$$$-----MAIN-----$$$$$$$$$$$$$$$$$$$$$ -->

<main>

    <div class="bg-container">

        <!-- ///////////////////----- destinations -----/////////////////////// -->

        <div class="container">

            <section class="destination">

                <div class="section-title">
                    <img class="picto picto-vert" src="./photos-ok-large/picto-vert.svg" alt="picto">
                    <h1> Choisissez votre destination </h1>
                    <img class="picto picto-vert" src="./photos-ok-large/picto-vert.svg" alt="picto">
                </div>

                <p>
                    AZTREK a conçu pour vous une gamme de voyages regroupant l'essentiel d'un pays ou d'une région.
                    Les
                    plus beaux treks à faire dans sa vie!

                </p>



                <section class="owl-carousel destinations-section">

                    <?php foreach ($countries as $country) : ?>
                    <article class="destination">

                        <img src="photos-ok-large/galerie/<?= $country["image"]; ?>" alt="">

                        <div class="destination-infos">
                            <h3> <a href="liste_sejours.php?id=<?= $country["id"]; ?>"> <?=$country ["titre"] ?></h3>
                            <a class="voir" href="liste_sejours.php?id=<?= $country["id"]; ?>">Voir</a>
                        </div>

                    </article>
                    <?php endforeach; ?>


                </section>

                <div class="destination-buttons">

                    <a href="liste_sejours.php" class="btn"> Nos départs confirmés</a>
                    <a href="liste_sejours.php" class="btn">Les voyageurs aiment</a>
                    <a href="liste_sejours.php" class="btn">Tous les séjours</a>
                </div>

                <!-- ///////////////////----- fin destinations -----/////////////////////// -->

                <!-- ///////////////////----- preferences -----/////////////////////// -->

                <div class="travel-preferences">
                    <h2>Voyagez comme vous aimez</h2>

                    <div class="travel-preferences-content">

                        <div class="preferences-aside">
                            <img src="./photos-ok-large/main/comme-vous-aimez.svg" alt="travel-preferences">
                            <div class="preferences-infos">
                                <p class="headline">Puisque chaque voyageur et chaque voyage est unique, chez <span
                                        class="aztrek">AZTREK</span> , nous avons à coeur de nous adapter au mieux à
                                    vos
                                    souhaits
                                </p>
                                <p>Vous seul savez comment vous voulez vivre ce trek, en groupe, en autonomie, ou
                                    encore
                                    avec un
                                    voyage totalement adapté à vos critères. Faites votre choix!</p>
                            </div>

                        </div>

                        <div class="preferences-btn">

                            <a href="" class="btn">Circuits accompagnés</a>
                            <a href="" class="btn">Autotours</a>
                            <a href="" class="btn">Voyages sur-mesure</a>
                        </div>

                    </div>


                </div>
            </section>
            <!-- ///////////////////----- fin preferences -----/////////////////////// -->

            <!-- ///////////////////----- recits-----/////////////////////// -->

            <section class="recits">
                <div class="section-title">
                    <img class="picto picto-vert" src="./photos-ok-large/picto-vert.svg" alt="picto">
                    <h1> Récits de voyages </h1>
                    <img class="picto picto-vert" src="./photos-ok-large/picto-vert.svg" alt="picto">
                </div>

                <p class="headline">Des contributeurs de la communauté <span class="aztrek">AZTREK </span> vous
                    livrent
                    leurs secrets et leurs bons plans à travers des articles. Expériences à vivre, lieux insolites,
                    anecdotes, adresses secrètes et coups de cœur sont au programme. Découvrez le monde, partagez
                    vos
                    voyages et vos rencontres !</p>

                <article class="recit-article">

                    <img src="./photos-ok-large/recits/jules-margaux-recit.svg" alt="costa-rica">

                    <div class="aside-recit">

                        <p>Du Pacifique aux Caraïbes en passant par la Vallée centrale, le Costa Rica est parsemé de
                            <span class="aztrek">parcs
                                et réserves naturelles.</span> Et ce qu’il y a de fabuleux, c’est qu’ils sont tous
                            singuliers.
                        </p>

                        <div class="auteur">
                            <div class="nom">Jules et Margaux,</div>
                            <div class="pays">Costa Rica,</div>
                            <div class="date">Janvier 2018</div>
                        </div>

                        <a href="#" class="btn btn-recits">Lire l'article</a>

                    </div>

                </article>

                <article class="recit-article">
                    <img src="./photos-ok-large/recits/thomas-recit.svg" alt="mexique">
                    <div class="aside-recit">

                        <p> Jouxtant le Guatemala, le <span class="aztrek"> Chiapas</span>, région mi-tropicale
                            mi-montagneuse, possède une identité aussi singulière que marquée. Ici, plus de 20% de
                            la
                            population est d’origine amérindienne, descendant pour la plupart des <span
                                class="aztrek">Mayas. </span>
                        </p>

                        <div class="auteur">
                            <div class="nom">Thomas,</div>
                            <div class="pays">Mexique,</div>
                            <div class="date">Septembre 2018</div>

                        </div>
                        <a href="#" class="btn btn-recits">Lire l'article</a>

                    </div>

                </article>

                <article class="recit-article">
                    <img src="./photos-ok-large/recits/marie-tarek-recit.svg" alt="guatemala">

                    <div class="aside-recit">

                        <p> Au cœur de la <span class="aztrek">Sierra Madre </span> guatémaltèque, le choc des
                            plaques
                            continentales a fait se dresser une belle brochette de <span class="aztrek">volcans</span>:
                            trente-trois, pas un de moins, dont trois étaient encore en éruption en 2008 !
                        </p>

                        <div class="auteur">
                            <div class="nom">Marie et Tarek,</div>
                            <div class="pays">Guatemala,</div>
                            <div class="date">Juin 2018</div>
                        </div>

                        <a href="#" class="btn btn-recits">Lire l'article</a>

                    </div>

                </article>


                <div class="btn-recits"> <a href="#" class="btn">Voir tous les récits</a></div>

            </section>
        </div>
    </div>
</main>

<!-- ///////////////////----- fin recits -----/////////////////////// -->

<!-- $$$$$$$$$$$$$$$$$$$$$$----- FIN MAIN-----$$$$$$$$$$$$$$$$$$$$$ -->

<!-- $$$$$$$$$$$$$$$$$$$$$$----- GALERIE-----$$$$$$$$$$$$$$$$$$$$$ -->

<div class="container">

    <section class="gallery">

        <div class="section-title">
            <img class="picto picto-vert" src="./photos-ok-large/picto-vert.svg" alt="picto">
            <h1> Galerie photos <br> #AZTREK</h1>
            <img class="picto picto-vert" src="./photos-ok-large/picto-vert.svg" alt="picto">
        </div>

        <div class="gallery-items">

            <div class="item-gallery">

                <a href="#">

                    <div class="contim-gallery"><img src="./photos-ok-large/galerie/photo-1.svg" alt="img-1">
                    </div>


                    <div class="infos-gallery">
                        <p>#aztrek <br>#guatemala <br> @serialtraveller </p>
                    </div>
                </a>


            </div>

            <div class="item-gallery">
                <a href="#">
                    <div class="contim-gallery"><img src="./photos-ok-large/galerie/photo-2.svg" alt="img-2"></div>

                    <div class="continfos-gallery">
                        <p class="infos-gallery">#aztrek <br>#honduras <br> @laurentm42</p>
                    </div>
                </a>

            </div>

            <div class="item-gallery">
                <a href="#">
                    <div class="contim-gallery"><img src="./photos-ok-large/galerie/photo-3.svg" alt="img-3"></div>

                    <div class="continfos-gallery">
                        <p class="infos-gallery">#aztrek <br>#costarica <br> @maudbayard</p>
                    </div>
                </a>

            </div>

            <div class="item-gallery">
                <a href="">

                    <div class="contim-gallery"><img src="./photos-ok-large/galerie/photo-4.svg" alt="img-4"></div>

                    <div class="continfos-gallery">
                        <p class="infos-gallery">#aztrek <br>#guatemala <br> @tarekf35</p>
                    </div>

                </a>


            </div>

            <div class="item-gallery">
                <a href="#">
                    <div class="contim-gallery"><img src="./photos-ok-large/galerie/photo5.svg" alt="img-5"></div>

                    <div class="continfos-gallery">
                        <p class="infos-gallery">#aztrek <br>#mexique <br> @juliusc29</p>
                    </div>
                </a>

            </div>

            <div class="item-gallery">
                <a href="#">
                    <div class="contim-gallery"><img src="./photos-ok-large/galerie/photo6.svg" alt="img-6"></div>

                    <div class="continfos-gallery">
                        <p class="infos-gallery">#aztrek <br>#costarica<br> @margot29</p>
                    </div>
                </a>

            </div>

            <div class="item-gallery">
                <a href="#">
                    <div class="contim-gallery"><img src="./photos-ok-large/galerie/photo7.svg" alt="img-7"></div>

                    <div class="continfos-gallery">
                        <p class="infos-gallery">#aztrek <br>#guatemala<br> @paulgranger35</p>
                    </div>
                </a>

            </div>



            <div class="item-gallery">
                <a href="#">
                    <div class="contim-gallery"><img src="./photos-ok-large/galerie/photo8.svg" alt="img-8"></div>

                    <div class="continfos-gallery">
                        <p class="infos-gallery">#aztrek <br>#mexique<br> @tomasoketchup</p>
                    </div>
                </a>

            </div>

        </div>

        <div class="btn-gallery"><a href="#" class="btn btn-gallery">Voir toutes les photos</a></div>


    </section>
</div>

<!-- $$$$$$$$$$$$$$$$$$$$$$----- FIN GALERIE-----$$$$$$$$$$$$$$$$$$$$$ -->

<!-- $$$$$$$$$$$$$$$$$$$$$$----- AGENCE-----$$$$$$$$$$$$$$$$$$$$$ -->

<section class="agence">

    <div class="container">

        <div class="agence-content">

            <div class="section-title agence-title">
                <img class="picto picto-blanc" src="./photos-ok-large/agence/picto-blanc.svg" alt="picto-blanc">
                <h1 class="agence-white"> L'agence</h1>
                <img class="picto picto-blanc" src="./photos-ok-large/agence/picto-blanc.svg" alt="picto-blanc">
            </div>

            <p class="headline">

                Une immensité de roches, la saine fatigue le soir au bivouac, la réussite au sommet, l’accueil
                chaleureux d’un village, autant d’efforts, de sensations, d’émotions qui constituent le trek et nous
                attirent depuis trois ans en Amérique Latine
            </p>
            <p>Au delà d'être une agence de voyages spécialisée, <strong> AZTREK </strong>est avant tout une équipe
                de passionnés de <strong>montagne, de sport, de découvertes</strong> . Chacun de ses membres a à
                cœur de transmettre sa passion du trek, mais aussi de faire découvrir à de nouveaux aventuriers les
                beautés d'un monde lointain, et pourtant si proche. Militant pour un <strong> tourisme durable et
                    responsable, </strong>nous agissons donc pour que nos voyages respectent au mieux les équilibres
                économiques, sociaux et environnementaux des pays visités.
            </p>

            <div class="btn-agence"> <a href="#" class="btn btn-agence">Découvrir l'agence</a></div>

        </div>
    </div>
</section>

<!-- $$$$$$$$$$$$$$$$$$$$$$----- FIN AGENCE-----$$$$$$$$$$$$$$$$$$$$$ -->

<!-- $$$$$$$$$$$$$$$$$$$$$$----- EQUIPE-----$$$$$$$$$$$$$$$$$$$$$ -->

<section class="equipe">

    <div class="container">

        <div class="section-title equipe-title">
            <img class="picto picto-vert" src="./photos-ok-large/picto-vert.svg" alt="picto-blanc">
            <h1> Ils vous accompagnent</h1>
            <img class="picto picto-vert" src="./photos-ok-large/picto-vert.svg" alt="picto-blanc">
        </div>

        <div class="equipe-items">

            <div class="item-equipe">

                <div class="contim-equipe"><img src="./photos-ok-large/equipe/stephane.svg" alt="stephane"></div>
                <div class="continfos-equipe">
                    <h4>Stéphane Thomas</h4>
                    <p>Créateur de l'agence <br>Expert toutes destinations</p>
                    <a href="" class="contact-equipe">stephane@aztrek.com</a>
                </div>

            </div>

            <div class="item-equipe">

                <div class="contim-equipe"><img src="./photos-ok-large/equipe/marie.svg" alt="marie"></div>
                <div class="continfos-equipe">
                    <h4>Marie Maillet</h4>
                    <p>Conseillère en voyages <br>Experte Guatemala</p>

                    <a href="" class="contact-equipe">marie@aztrek.com</a>
                </div>

            </div>

            <div class="item-equipe">

                <div class="contim-equipe"><img src="./photos-ok-large/equipe/julien.svg" alt="julien"></div>
                <div class="continfos-equipe">
                    <h4>Julien Laplace</h4>
                    <p>Conseiller en voyages <br>Expert Salvador</p>

                    <a href="" class="contact-equipe">julien@aztrek.com</a>
                </div>

            </div>


            <div class="item-equipe">

                <div class="contim-equipe"><img src="./photos-ok-large/equipe/nathalie.svg" alt="nathalie"></div>
                <div class="continfos-equipe">
                    <h4>Nathalie Carré</h4>
                    <p>Guide de montagne <br>Experte Mexique</p>

                    <a href="" class="contact-equipe">nathalie@aztrek.com</a>
                </div>

            </div>


            <div class="item-equipe">

                <div class="contim-equipe"><img src="./photos-ok-large/equipe/carlo.svg" alt="carlo"></div>
                <div class="continfos-equipe">
                    <h4>Carlo Suarez</h4>
                    <p>Guide de montagne <br>Expert Costa Rica</p>

                    <a href="" class="contact-equipe">carlo@aztrek.com</a>
                </div>

            </div>

            <div class="item-equipe">

                <div class="contim-equipe"><img src="./photos-ok-large/equipe/romain.svg" alt="romain"></div>
                <div class="continfos-equipe">
                    <h4>Romain Rossi</h4>
                    <p>Guide de montagne <br>Expert Honduras</p>

                    <a href="" class="contact-equipe">romain@aztrek.com</a>
                </div>

            </div>

            <div class="item-equipe">

                <div class="contim-equipe"><img src="./photos-ok-large/equipe/penelope.svg" alt="penelope"></div>
                <div class="continfos-equipe">
                    <h4>Penelope Garcia</h4>
                    <p>Guide de montagne <br>Experte Guatemala</p>

                    <a href="" class="contact-equipe">penelope@aztrek.com</a>
                </div>

            </div>

            <div class="item-equipe">

                <a href="#" class="recrutement">

                    <div class="contim-equipe"><img src="./photos-ok-large/equipe/recrutement.svg" alt="recrutement">
                    </div>
                    <div class="continfos-equipe">

                        <p>Envie de nous rejoindre?</p>
                        <h4>Contactez-nous!</h4>

                    </div>

                </a>

            </div>

        </div>
    </div>

</section>



<!-- $$$$$$$$$$$$$$$$$$$$$$----- FIN EQUIPE-----$$$$$$$$$$$$$$$$$$$$$ -->

<!-- $$$$$$$$$$$$$$$$$$$$$$----- NEWS LETTER----$$$$$$$$$$$$$$$$$$$$$ -->

<section class="newsletter">

    <div class="container">

        <p>Tenez vous informé des dernières actualités d'Aztrek en vous inscrivant à la newsletter</p>

        <div class="email-nl">
            <input type="text" placeholder="Votre adresse mail">
            <button type="submit">OK</button>
        </div>
    </div>

</section>

<!-- $$$$$$$$$$$$$$$$$$$$$$----- FIN NEWS LETTER----$$$$$$$$$$$$$$$$$$$$$ -->


<?php getFooter(); ?>