<?php
    require_once __DIR__ . "/../../functions/views.php";
    require_once __DIR__ . "/../../models/AppRepository.php";

    $asideLinks = AppRepository::$asideLinksFr;
    $contactItems = AppRepository::$contactItemsFr;
?>

<!DOCTYPE html>
<html lang="fr">
    <?= head_view("résumé") ?>
    <body>
        <main>
            <aside>
                <img class="img-profil" src="assets/images/tafsir.png" alt="Tafsir NDIOUR">
                <?php
                    foreach($asideLinks as $key => $value) {
                        echo link_with_icone($key, $value["href"], $value["class"], $value["icone"], 'h3');
                    }
                ?>
            </aside>
            <section>
                <div class="language-container">
                    <img class="icone icone-langue" src="./../../assets/images/language.svg" alt="Icone">
                    <select name="langue" id="langue">
                        <option value="fr" selected>Français</option>
                        <option value="en">Anglais</option>
                    </select>
                </div>
                <header class="author-container">
                    <h1 class="author">Tafsir Mbodj NDIOUR</h1>
                    <details class="contact-details">
                        <summary>Infos contact</summary>
                        <p>
                        <?php
                            foreach($contactItems as $key => $value) {
                                echo contact_item($key, $value["href"], $value["class"], $value["icone"]);
                            }
                        ?>
                        </p>
                    </details>
                </header>
                <p class="who-is">
                    Développeur full stack en apprentissage chez <a target="_blank" href="https://etienne-services.fr" rel="nofollow noopener noreferrer">ÉTIENNE SERVICES</a>, co-fondateur de <a target="_blank" href="https://jant.tech" rel="nofollow noopener noreferrer">Jant TECH</a>.
                </p>
                <hr>
                <?= quote_view("Charles Aznavour", "J'apprends toujours quelque chose. Je ne me suis jamais endormi un soir de ma vie sans apprendre quelque chose.") ?>
                <p class="about-me part-1">
                    <span class="just-T">T</span><span class="strong just-afsir">afsir</span> est un développeur passionné qui aime partager, 
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
                <?= quote_view("Abraham Maslow", "Si le seul outil que vous avez est un marteau, vous tendez à voir tout problème comme un clou.") ?>
            </section>
        </main>
        <script src="assets/js/app.js"></script>
    </body>
</html>