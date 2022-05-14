<?php
    function head_view($title){
        $root = $_SERVER["DOCUMENT_ROOT"];
        return <<<HTML
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="description" content="Portfolio Tafsir Mbodj NDIOUR">
                <meta name="author" content="Tafsir Mbodj NDIOUR">
                <meta name="creator" content="Tafsir Mbodj NDIOUR">
                <title>Portfolio Tafsir Mbodj NDIOUR: $title</title>
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Happy+Monkey">
                <link rel="stylesheet" href="/assets/css/styles.css">
            </head>
        HTML;
    }

    function footer(){
        return <<<HTML
            <div>
                <p>
                    <a href="http://jigsaw.w3.org/css-validator/check/referer">
                        <img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS Valide !"/>
                    </a>
                </p>
            </div>
        HTML;
    }

    function language_view($lang = 'fr'){
        if($lang === 'fr'){
            return <<<HTML
                <div class="language-container">
                    <img class="icone icone-langue" src="/assets/images/language.svg" alt="Icone">
                    <select name="langue" id="langue" property="schema:knowsLanguage">
                        <option value="fr" selected>Français</option>
                        <option value="en">Anglais</option>
                        <option value="ru">Russe</option>
                    </select>
                </div>
            HTML;
        } else if($lang === 'en'){
            return <<<HTML
                <div class="language-container">
                    <img class="icone icone-langue" src="/assets/images/language.svg" alt="Icone">
                    <select name="langue" id="langue" property="schema:knowsLanguage">
                        <option value="fr">French</option>
                        <option value="en" selected>English</option>
                        <option value="ru">Russian</option>
                    </select>
                </div>
            HTML;
        }
        else{
            return <<<HTML
                <div class="language-container">
                    <img class="icone icone-langue" src="/assets/images/language.svg" alt="Icone">
                    <select name="langue" id="langue" property="schema:knowsLanguage">
                        <option value="fr">Французский</option>
                        <option value="en">Английский язык</option>
                        <option value="ru" selected>Русский</option>
                    </select>
                </div>
            HTML;
        }
    }

    function link_with_icone($title, $href, $class, $iconeName, $hType) {
        $active = '';
        if(strcmp(utf8_encode($_SERVER["REQUEST_URI"]), $href) === 0){
            $active = 'active';
        }
        return <<<HTML
            <a href="$href" class="$class $active" property="rdfs:seeAlso" resource="$href">
                <img class="icone" src="/assets/images/$iconeName.svg" alt="Icone">
                <$hType>$title</$hType>
            </a>
        HTML;
    }

    function contact_item($title, $href, $class, $icone, $property, $value){
        return <<<HTML
            <a href="$href"
                    rel="nofollow noopener noreferrer" 
                    target="_blank"
                    class="$class text-underline text-dark" 
                    property="$property" 
                    resource="$value">
                <img class="icone icone-contact" src="/assets/images/$icone.svg" alt="Icone">
                <span>$title</span>
            </a>
        HTML;
    }

    function quote_view($author, $quote){
        return <<<HTML
            <p class="citation">
                <img class="icone quote quote-reverse" src="assets/images/format_quote.svg" alt="Icone">
                <em>$quote</em>
                <img class="icone quote" src="/assets/images/format_quote.svg" alt="Icone">
                <br>
                <strong>$author</strong>
            </p>
        HTML;
    }

    function experience_view($title, $logo, $interval, $tools, $lang){
        $headerTools = 'Frameworks / Langages de programmation';
        if(strcmp($lang, "en") === 0){
            $headerTools = 'Frameworks / Programming Languages';
        } else if(strcmp($lang, "ru") === 0){
            $headerTools = 'Фреймворки / Языки программирования';
        }
        $nbTools = count($tools);
        $listTools = '';
        if($nbTools > 0){
            $listTools = '<p class="exp-tools-header text-gray">' . 
                            $headerTools . 
                        '</p>' . 
                        '<ul>';
            foreach($tools as $value){
                $listTools .= '<li class="text-gray" property="schema:knowsAbout">' . $value . '</li>';
            }
            $listTools .= '</ul>';
        }
        return <<<HTML
            <article class="exp-container">
                <img class="logo" src="$logo" alt="Logo">
                <div class="body">
                    <h4 class="exp-title">$title</h4>
                    <h4 class="exp-interval text-gray">$interval</h4>
                    $listTools
                </div>
            </article>
        HTML;
    }

    function education_view($school, $logo, $formation, $interval){
        return <<<HTML
            <article class="edu-container">
                <img class="edu-logo" src="$logo" alt="Sup Galilée">
                <div class="edu-body">
                    <h4 class="school-name" property="dbo:EducationalInstitution">$school</h4>
                    <h4 class="edu-title text-gray">$formation</h4>
                    <p class="edu-interval text-gray">$interval</p>
                </div>
            </article>
        HTML;
    }

    function skill_view($name, $logo, $size = 72){
        return <<<HTML
            <li class="skill-container">
                <h4 class="skill-name" property="dc:knowAbout">$name</h4>
                <img class="skill-logo" src="$logo" alt="Skill's logo">
            </li>
        HTML;
    }
?>