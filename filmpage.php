<?php
require_once "assets/includes/db.php";
include "assets/includes/head.php";
include "assets/includes/header.php";

?>
<main>

    <div id="main-body">
        <div id="main-info">
            <div class="film-title">
                <h1>Jurassic Park: Fallen Kingdom</h1>
            </div>
            <div class="container-film">
                <img src="assets/img/JurassicPark Poster.png" alt="JurassicPark">
                <div class="container-film-info">
                    <div class="film-info">
                        <div class="film-review">
                            <img src="assets/img/Star colored.png" alt="colored star">
                            <img src="assets/img/Star colored.png" alt="colored star">
                            <img src="assets/img/Star colored.png" alt="colored star">
                            <img src="assets/img/Star colored.png" alt="colored star">
                            <img class="uncolored-star" src="assets/img/Star uncolored.png" alt="uncolored star">
                        </div>
                        <div class="film-restrictions">
                            <img src="assets/img/kijkwijzer-12.png" alt="kijkwijzer 12">
                            <img src="assets/img/kijkwijzer-eng.png" alt="kijkwijzer eng">
                            <img src="assets/img/kijkwijzer-geweld.png" alt="kijkwijzer geweld">
                        </div>
                        <div class="film-release">
                            <h3>Release: </h3>
                            <h3 class="film-release-date">07-06-2018</h3>
                        </div>
                        <p class="film-description">
                            {{ film_shortinfo}}
                            <!-- In het 3D actie-spektakel Jurassic World: Fallen Kingdom keren favoriete personages
                            terug en
                            worden er nieuwe soorten dinosaurussen geïntroduceerd die nog angstaanjagender zijn dan
                            ooit tevoren.
                            Welkom in Jurassic World: Fallen Kingdom! Drie jaar geleden werd het themapark en
                            luxeresort Jurassic World
                            verwoest door losgebarsten dinosaurussen. Isla Nublar is nu een onbewoond eiland
                            geworden waar de overgebleven
                            dinosaurussen in de jungle aan hun lot overgelaten zijn. Wanneer de slapende vulkaan op
                            het eiland weer actief wordt,
                            dreigen de dinosaurussen opnieuw uit te sterven. Claire (Bryce Dallas Howard) zet alles
                            op alles om dit te voorkomen.
                            Ze weet Owen (Chris Pratt) over te halen om samen met haar en een team van specialisten
                            terug te gaan naar Isla Nublar
                            om te proberen de dinosaurussen te redden. Owen is vastbesloten om de vermiste raptor
                            Blue, die hij van jongs af aan heeft getraind,
                            te vinden. Als ze op het eiland arriveren blijkt de vulkaan die op uitbarsten staat niet
                            hun grootste probleem te zijn.
                            In dit nieuwe deel van één van de meest populaire en succesvolle filmreeksen ooit zullen
                            Jeff Goldblum en BD Wong weer
                            te zien zijn als Ian Malcolm en Dr. Henry Wu. De cast bestaat verder uit James Cromwell,
                            Ted Levine, Justice Smith,
                            Geraldine Chaplin, Daniella Pineda, Toby Jones en Rafe Spall. De regie is in handen van
                            J.A. Bayona (The Impossible),
                            en het scenario is geschreven door Colin Trevorrow en Derek Connolly, de regisseur en
                            co-scenarist van Jurassic World.
                            Steven Spielberg en Colin Trevorrow treden op als uitvoerend producenten namens
                            Universal Pictures en Amblin Entertainment.
                            Productie is in handen van Frank Marshall, Pat Crowley en Belén Atienza. -->
                        </p>
                        <div class="container-additional-info">
                            <ul class="additional-info">
                                <li>
                                    <strong class="additional-info-header">Genre: </strong>
                                    <p>Actie</p>
                                </li>
                                <li>
                                    <strong class="additional-info-header">Filmlengte: </strong>
                                    <p>128 Minuten</p>
                                </li>
                                <li>
                                    <strong class="additional-info-header">Land: </strong>
                                    <p>VS</p>
                                </li>
                                <li>
                                    <strong class="additional-info-header">IMDB Score: </strong>
                                    <p>8.3/10</p>
                                </li>
                                <li>
                                    <strong class="additional-info-header">Regisseur: </strong>
                                    <p>Juan Antonio Bayona</p>
                                </li>
                                <li class="additional-info-header-actor">
                                    <strong>Acteurs:</strong>
                                    <div>
                                        <ul class="info-actors">
                                            <li>
                                                <div class="container-actors">
                                                    <img src="assets/img/BryceDallas.png" alt="Bryce Dalas Howard">
                                                    <p>Bryce Dallas Howard</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container-actors">
                                                    <img src="assets/img/Chris_Pratt.png" alt="Chriss Pratt">
                                                    <p>Chriss Pratt</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container-actors">
                                                    <img src="assets/img/rafe_spall.png" alt="Rafe Spall">
                                                    <p>Rafe Spall</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="container-actors">
                                                    <img src="assets/img/Toby_Jones.png" alt="Toby Jones">
                                                    <p>Toby Jones</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <a class="buy-tickets" href="index.php">
                <div>
                    <h1>Koop Je Tickets</h1>
                </div>
            </a>
        </div>
    </div>
</main>
<?php include "assets/includes/footer.php"; ?>