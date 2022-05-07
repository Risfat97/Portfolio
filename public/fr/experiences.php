<?php
    require_once __DIR__ . "/../../functions/views.php";
    require_once __DIR__ . "/../../models/AppRepository.php";

    $asideLinks = AppRepository::$asideLinksFr;
    $experiences = AppRepository::$experiencesFr;
?>

<!DOCTYPE html>
<html lang="fr">
    <?= head_view("expériences") ?>
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
                    <img class="icone icone-langue" src="assets/images/language.svg" alt="Icone">
                    <select name="langue" id="langue">
                        <option value="fr" selected>Français</option>
                        <option value="en">Anglais</option>
                    </select>
                </div>
                <?php
                    foreach($experiences as $value){
                        echo experience_view($value["title"], $value["logo"], $value["interval"], $value["tools"], "fr");
                    }
                ?>
            </section>
        </main>
        <script src="assets/js/app.js"></script>
    </body>
</html>