<?php
    require_once __DIR__ . "/../../functions/views.php";
    require_once __DIR__ . "/../../models/AppRepository.php";

    $asideLinks = AppRepository::$asideLinksFr;
    $langages = AppRepository::$languages;
    $technos = AppRepository::$techno;
    $outils = AppRepository::$tools;
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <?= head_view("compétences") ?>
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
                <div class="language-container">
                    <img class="icone icone-langue" src="assets/images/language.svg" alt="Icone">
                    <select name="langue" id="langue" property="schema:knowsLanguage">
                        <option value="fr" selected>Français</option>
                        <option value="en">Anglais</option>
                    </select>
                </div>
                <p class="bref-desc">
                    <span property="foaf:firstName">Tafsir</span> est passionné par les nouvelles technologies et est souvent entrain 
                    d'apprendre un nouveau langage / framework ou un nouveau outil.
                </p>
                <article class="section-skill">
                    <h2>Langages</h2>
                    <ul>
                        <?php
                            foreach($langages as $value) {
                                echo skill_view($value["name"], $value["logo"]);
                            }
                        ?>
                    </ul>
                </article>
                <article class="section-skill">
                    <h2>Technologies</h2>
                    <ul>
                        <?php
                            foreach($technos as $value) {
                                echo skill_view($value["name"], $value["logo"]);
                            }
                        ?>
                    </ul>
                </article>
                <article class="section-skill">
                    <h2>Outils</h2>
                    <ul>
                        <?php
                            foreach($outils as $value) {
                                echo skill_view($value["name"], $value["logo"]);
                            }
                        ?>
                    </ul>
                </article>
            </section>
        </main>
        <script src="assets/js/app.js"></script>
    </body>
</html>