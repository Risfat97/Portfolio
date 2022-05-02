<?php
    require_once __DIR__ . "/../../functions/views.php";
    require_once __DIR__ . "/../../models/AppRepository.php";

    $asideLinks = AppRepository::$asideLinksEn;
    $contactItems = AppRepository::$contactItemsEn;
?>

<!DOCTYPE html>
<html lang="en">
    <?= head_view("summary") ?>
    <body>
        <main>
            <aside>
                <img class="img-profil" src="./../../assets/images/tafsir.png" alt="Tafsir NDIOUR">
                <?php
                    foreach($asideLinks as $key => $value) {
                        echo link_with_icone($key, $value["href"], $value["class"], $value["icone"], 'h3');
                    }
                ?>
            </aside>
            <section>
                <div class="language-container">
                    <img class="icone icone-langue" src="assets/images/language.svg" alt="Icone">
                    <select name="langue" id="langue">
                        <option value="fr">French</option>
                        <option value="en" selected>English</option>
                    </select>
                </div>
                <header class="author-container">
                    <h1 class="author">Tafsir Mbodj NDIOUR</h1>
                    <details class="contact-details">
                        <summary>Contact info</summary>
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
                    Full Stack developer in apprenticeship at <a target="_blank" href="https://etienne-services.fr" rel="nofollow noopener noreferrer">ÉTIENNE SERVICES</a>, co-founder of <a target="_blank" href="https://jant.tech" rel="nofollow noopener noreferrer">Jant TECH</a>.
                </p>
                <hr>
                <?= quote_view("Charles Aznavour", "I allways learn something. I never fell asleep a night in my life without learning something.") ?>
                <p class="about-me part-1">
                    <span class="just-T">T</span><span class="strong just-afsir">afsir</span> is an enthusiast developer who like sharing, working 
                    in a team while knowing how to evolve autonomously.<br>
                    I started development with the C programming language with a small class project (a diary with a graphic interface and 
                    database), then it becomes a real passion. I am fond of learning a new programming language or exploring a new framework 
                    with my personal projects, it allows me to discover new concepts, new ways to code.
                    <br>
                    I develop:
                </p>
                <ul class="ul-about-me">
                    <li>websites or web apps</li>
                    <li>mobile apps</li>
                    <li>software</li>
                </ul>
                <p class="about-me part-2">
                    I am well organized and rigorous in my professional tasks while taking into account possible changes in the future in 
                    order to get a head start. Whatever the project is, however big it is, however close the deadline, I give myself the 
                    means to achieve my goals while delivering quality work in accordance with good security practices.
                </p>
                <?= quote_view("Abraham Maslow", "If the only tool that you have is a hammer, you tend to see any problem as a nail.") ?>
            </section>
        </main>
        <script src="assets/js/app.js"></script>
    </body>
</html>