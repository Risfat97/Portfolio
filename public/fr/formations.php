<?php
    require_once __DIR__ . "/../../functions/views.php";
    require_once __DIR__ . "/../../models/AppRepository.php";

    $asideLinks = AppRepository::$asideLinksFr;
    $formations = AppRepository::$educationFr;
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <?= head_view("formations") ?>
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
                <h2 hidden>Formations</h2>
                <div class="language-container">
                    <img class="icone icone-langue" src="assets/images/language.svg" alt="Icone">
                    <select name="langue" id="langue" property="schema:knowsLanguage">
                        <option value="fr" selected>Français</option>
                        <option value="en">Anglais</option>
                    </select>
                </div>
                <?php
                    foreach($formations as $key => $value) {
                        echo education_view($value["school"], $value["logo"], $value["formation"], $value["interval"]);
                    }
                ?>
            </section>
        </main>
        <script src="assets/js/app.js"></script>
    </body>
</html>