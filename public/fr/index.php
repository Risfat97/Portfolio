<?php
    require_once __DIR__ . "/../../functions/views.php";
    require_once __DIR__ . "/../../models/AppRepository.php";

    $asideLinks = AppRepository::$asideLinksFr;
    $contactItems = AppRepository::$contactItemsFr;
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <?= head_view("résumé") ?>
    <body>
        <main about="#tafsir" typeof="foaf:Person">
            <aside>
                <img class="img-profil" src="assets/images/tafsir.png" alt="Tafsir NDIOUR" property="foaf:img">
                <span property="foaf:depiction"
                    hidden>Tafsir Mbodj NDIOUR</span>
                <?php
                    foreach($asideLinks as $key => $value) {
                        echo link_with_icone($key, $value["href"], $value["class"], $value["icone"], 'h3');
                    }
                ?>
            </aside>
            <section>
                <?= language_view() ?>
                <header class="author-container">
                    <h1 class="author" 
                        property="foaf:depicts" 
                        resource="assets/images/tafsir.png">
                        <span property="foaf:firstName">Tafsir Mbodj</span> <span property="foaf:familyName">NDIOUR</span></h1>
                    <details class="contact-details">
                        <summary>Infos contact</summary>
                        <p>
                        <?php
                            foreach($contactItems as $key => $value) {
                                echo contact_item($key, $value["href"], $value["class"], $value["icone"], $value["property"], $value["value"]);
                            }
                        ?>
                            <a class="d-flex align-items-center item-contact text-dark">
                                <img class="icone icone-location" src="assets/images/pin_drop.svg" alt="Icone">
                                <span class="text-dark" 
                                    property="schema:homeLocation">Paris 75014</span>
                            </a>
                        </p>
                    </details>
                </header>
                <p class="who-is">
                    <span property="schema:jobTitle">Développeur full stack</span> en apprentissage chez 
                    <a class="text-underline text-dark" 
                        target="_blank" 
                        href="https://etienne-services.fr" 
                        rel="nofollow noopener noreferrer" 
                        property="foaf:workplaceHomepage" 
                        resource="https://etienne-services.fr">ÉTIENNE SERVICES</a>, 
                    co-fondateur de 
                    <a class="text-underline text-dark" 
                        target="_blank" 
                        href="https://jant.tech" 
                        rel="nofollow noopener noreferrer"
                        property="schema:memberOf">Jant TECH</a>.
                </p>
                <hr>
                <?= quote_view("Charles Aznavour", "J'apprends toujours quelque chose. Je ne me suis jamais endormi un soir de ma vie sans apprendre quelque chose.") ?>
                <div property="dc:description">
                    <p class="about-me part-1">
                        <span class="just-T">T</span> 
                        <span class="strong just-afsir">afsir</span>&nbsp;est un développeur passionné qui aime partager, 
                        travailler en équipe tout en sachant évoluer de manière autonome. <br>
                        J'ai commencé le développement avec le langage C avec comme petit projet en classe (un agenda avec interface graphique et une base 
                        de données), ensuite c'est devenu très vite une vraie passion. J'adore apprendre un nouveau langage de programmation ou explorer un 
                        nouveau framework avec mes projets personnels, cela me permet de découvrir de nouveaux concepts ou de nouvelles manières de coder.
                        <br>
                        Je développe:
                    </p>
                    <ul class="ul-about-me">
                        <li>des sites web ou appications web</li>
                        <li>des appications mobiles</li>
                        <li>des progiciels (logiciel pour pc)</li>
                    </ul>
                    <p class="about-me part-2">
                        Je travaille de manière organisé, rigoureux dans les tâches professionnelles tout en tenant compte d'éventuelles 
                        évolutions dans le futur afin de prendre de l'avance.
                        Quelque soit le projet à réaliser, aussi gros soit-il, aussi proche soit le deadline, je me donne les moyens d’atteindre 
                        mes objectifs tout en délivrant un travail de qualité le tout dans les bonnes pratiques de sécurité.
                    </p>
                </div>
                <?= quote_view("Abraham Maslow", "Si le seul outil que vous avez est un marteau, vous tendez à voir tout problème comme un clou.") ?>
            </section>
        </main>
        <script src="assets/js/app.js"></script>
    </body>
</html>