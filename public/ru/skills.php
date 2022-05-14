<?php
    require_once __DIR__ . "/../../functions/views.php";
    require_once __DIR__ . "/../../models/AppRepository.php";

    $asideLinks = AppRepository::$asideLinksRu;
    $languages = AppRepository::$languages;
    $technos = AppRepository::$techno;
    $tools = AppRepository::$tools;
?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
    <?= head_view("навыки") ?>
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
                <p class="bref-desc">
                    <span property="foaf:firstName">Tafsir</span> увлекается новыми технологиями и часто изучает новые языки 
                    программирования язык / фреймворк или инструмент.
                </p>
                <article class="section-skill">
                    <h2>Языки</h2>
                    <ul>
                        <?php
                            foreach($languages as $value) {
                                echo skill_view($value["name"], $value["logo"]);
                            }
                        ?>
                    </ul>
                </article>
                <article class="section-skill">
                    <h2>Технологии</h2>
                    <ul>
                        <?php
                            foreach($technos as $value) {
                                echo skill_view($value["name"], $value["logo"]);
                            }
                        ?>
                    </ul>
                </article>
                <article class="section-skill">
                    <h2>инструменты</h2>
                    <ul>
                        <?php
                            foreach($tools as $value) {
                                echo skill_view($value["name"], $value["logo"]);
                            }
                        ?>
                    </ul>
                </article>
            </section>
        </main>
        <script src="/assets/js/app.js"></script>
    </body>
</html>