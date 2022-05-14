<?php
    require_once __DIR__ . "/../../functions/views.php";
    require_once __DIR__ . "/../../models/AppRepository.php";

    $asideLinks = AppRepository::$asideLinksRu;
    $formations = AppRepository::$educationRu;
?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
    <?= head_view("тренинги") ?>
    <body>
        <main about="#tafsir" typeof="foaf:Person">
            <aside>
                <img class="img-profil" src="/assets/images/tafsir.png" alt="Tafsir NDIOUR" property="foaf:img">
                <span property="foaf:depiction"
                    hidden>Tafsir Mbodj NDIOUR</span>
                <?php
                    foreach($asideLinks as $key => $value) {
                        echo link_with_icone($key, $value["href"], $value["class"], $value["icone"], 'h3');
                    }
                ?>
                <a href="/assets/docs/cv_en_tafsir.pdf" class="aside-link" property="foaf:Document" resource="/assets/docs/cv_en_tafsir.pdf">
                    <img class="icone" src="/assets/images/file_download.svg" alt="Icone">
                    <h3>C.V</h3>
                </a>
            </aside>
            <section>
                <?= language_view('ru') ?>
                <?php
                    foreach($formations as $key => $value) {
                        echo education_view($value["school"], $value["logo"], $value["formation"], $value["interval"]);
                    }
                ?>
                <div class="exp-end">
                    <div class="end"></div>
                </div>
            </section>
        </main>
        <script src="/assets/js/app.js"></script>
    </body>
</html>