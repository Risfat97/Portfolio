<?php
    function head_view($title){
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
                <link rel="stylesheet" href="./../../assets/css/styles.css">
            </head>
        HTML;
    }

    function link_with_icone($title, $href, $class, $iconeName, $hType) {
        return <<<HTML
            <a href="$href" class="$class">
                <img class="icone" src="./../../assets/images/$iconeName.svg" alt="Icone">
                <$hType>$title</$hType>
            </a>
        HTML;
    }

    function contact_item($title, $href, $class, $icone){
        return <<<HTML
            <a href="$href"
                    rel="nofollow noopener noreferrer"
                    target="_blank"
                    class="$class">
                <img class="icone icone-contact" src="./../../assets/images/$icone.svg" alt="Icone">
                <span>$title</span>
            </a>
        HTML;
    }

    function quote_view($author, $quote){
        return <<<HTML
            <p class="citation">
                <img class="icone quote quote-reverse" src="assets/images/format_quote.svg" alt="Icone">
                <em>$quote</em>
                <img class="icone quote" src="assets/images/format_quote.svg" alt="Icone">
                <br>
                <strong>$author</strong>
            </p>
        HTML;
    }
?>