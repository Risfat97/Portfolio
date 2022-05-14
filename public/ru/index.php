<?php
    require_once __DIR__ . "/../../functions/views.php";
    require_once __DIR__ . "/../../models/AppRepository.php";

    $asideLinks = AppRepository::$asideLinksRu;
    $contactItems = AppRepository::$contactItemsRu;
?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
    <?= head_view("резюме") ?>
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
            </aside>
            <section>
                <?= language_view('ru') ?>
                <header class="author-container">
                    <h1 class="author" 
                        property="foaf:depicts" 
                        resource="assets/images/tafsir.png">
                        <span property="foaf:firstName">Tafsir Mbodj</span> <span property="foaf:familyName">NDIOUR</span></h1>
                    <details class="contact-details">
                        <summary>контактная информация</summary>
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
                    <span property="schema:jobTitle">Разработчик полного стека</span> стажировка в 
                    <a class="text-underline text-dark" 
                        target="_blank" 
                        href="https://etienne-services.fr" 
                        rel="nofollow noopener noreferrer" 
                        property="foaf:workplaceHomepage" 
                        resource="https://etienne-services.fr">ÉTIENNE SERVICES</a>, 
                    соучредитель 
                    <a class="text-underline text-dark" 
                        target="_blank" 
                        href="https://jant.tech" 
                        rel="nofollow noopener noreferrer"
                        property="schema:memberOf">Jant TECH</a>.
                </p>
                <hr>
                <?= quote_view("Charles Aznavour", "Я всегда чему-то учусь. Я ни разу в жизни не ложился спать, не узнав ничего нового.") ?>
                <div property="dc:description">
                    <p class="about-me part-1">
                        <span class="just-T">T</span> 
                        <span class="strong just-afsir">afsir</span>&nbsp;страстный разработчик, который любит делиться, 
                        работать в команде и в то же время иметь возможность развиваться самостоятельно. <br>
                        Я начал разработку на языке C как небольшой проект в классе (календарь с графическим интерфейсом и базой данных), 
                        затем это быстро стало настоящей страстью. базы данных), то это быстро стало настоящей страстью. Я люблю изучать 
                        новый язык программирования или исследовать новый фреймворк вместе со своими Мне нравится изучать новый язык 
                        программирования или исследовать новый фреймворк в своих личных проектах, это позволяет мне открыть для себя 
                        новые концепции или новые способы кодирования. Переведено с помощью (бесплатная версия)
                        <br>
                        Я расскажу подробнее:
                    </p>
                    <ul class="ul-about-me">
                        <li>веб-сайты или веб-приложения</li>
                        <li>мобильные приложения</li>
                        <li>программные пакеты (программное обеспечение для ПК)</li>
                    </ul>
                    <p class="about-me part-2">
                    Я работаю организованно, строго выполняю свои профессиональные задачи, принимая во внимание возможное развитие 
                    событий в будущем, чтобы быть впереди. 
                    Каким бы ни был проект, каким бы большим он ни был, каким бы близким ни был срок выполнения, я даю себе возможность 
                    достичь поставленных целей, выполняя качественную работу с соблюдением правил техники безопасности.
                    </p>
                </div>
                <?= quote_view("Abraham Maslow", "Если единственный инструмент, который у вас есть, - молоток, вы склонны воспринимать любую проблему как гвоздь.") ?>
            </section>
        </main>
        <script src="assets/js/app.js"></script>
    </body>
</html>