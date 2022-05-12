<?php
    class AppRepository {
        public static $asideLinksFr = [
            "Résumé" => [
                "href" => "/fr",
                "class" => "aside-link",
                "icone" => "badge"
            ],
            "Expériences" => [
                "href" => "/experiences",
                "class" => "aside-link",
                "icone" => "military_tech"
            ],
            "Formations" => [
                "href" => "/formations",
                "class" => "aside-link",
                "icone" => "school"
            ],
            "Compétences" => [
                "href" => "/competences",
                "class" => "aside-link",
                "icone" => "auto_awesome"
            ]
        ];

        public static $asideLinksEn = [
            "Summary" => [
                "href" => "/en",
                "class" => "aside-link",
                "icone" => "badge"
            ],
            "Experience" => [
                "href" => "/experience",
                "class" => "aside-link",
                "icone" => "military_tech"
            ],
            "Education" => [
                "href" => "/education",
                "class" => "aside-link",
                "icone" => "school"
            ],
            "Skills" => [
                "href" => "/skills",
                "class" => "aside-link",
                "icone" => "auto_awesome"
            ]
        ];

        public static $contactItemsFr = [
            "Profil LinkedIn" => [
                "href" => "https://www.linkedin.com/in/tafsir-mbodj-ndiour-4a46b0161/",
                "class" => "d-flex align-items-center item-contact",
                "icone" => "linkedin-brands",
                "property" => "foaf:account",
                "value" => "https://www.linkedin.com/in/tafsir-mbodj-ndiour-4a46b0161/"
            ],
            "Profil Github" => [
                "href" => "https://github.com/risfat97",
                "class" => "d-flex align-items-center item-contact",
                "icone" => "github-brands",
                "property" => "foaf:account",
                "value" => "https://github.com/risfat97"

            ],
            "+33 7 73 16 91 58" => [
                "href" => "tel:+33773169158",
                "class" => "d-flex align-items-center item-contact",
                "icone" => "phone-solid",
                "property" => "schema:telephone",
                "value" => "+33773169158"

            ],
            "tamsir97@gmail.com" => [
                "href" => "mailto:tamsir97@gmail.com",
                "class" => "d-flex align-items-center item-contact",
                "icone" => "envelope-solid",
                "property" => "schema:email",
                "value" => "tamsir97@gmail.com"
            ]
        ];

        public static $contactItemsEn = [
            "LinkedIn profile" => [
                "href" => "https://www.linkedin.com/in/tafsir-mbodj-ndiour-4a46b0161/",
                "class" => "d-flex align-items-center item-contact",
                "icone" => "linkedin-brands",
                "property" => "foaf:account",
                "value" => "https://www.linkedin.com/in/tafsir-mbodj-ndiour-4a46b0161/"
            ],
            "Github profile" => [
                "href" => "https://github.com/risfat97",
                "class" => "d-flex align-items-center item-contact",
                "icone" => "github-brands",
                "property" => "foaf:account",
                "value" => "https://github.com/risfat97"
            ],
            "+33 7 73 16 91 58" => [
                "href" => "tel:+33773169158",
                "class" => "d-flex align-items-center item-contact",
                "icone" => "phone-solid",
                "property" => "schema:telephone",
                "value" => "+33773169158"
            ],
            "tamsir97@gmail.com" => [
                "href" => "mailto:tamsir97@gmail.com",
                "class" => "d-flex align-items-center item-contact",
                "icone" => "envelope-solid",
                "property" => "schema:email",
                "value" => "tamsir97@gmail.com"
            ]
        ];

        public static $experiencesFr = [
            [
                "title" => "Développeur d'applications web et mobiles chez <a class=\"text-underline text-dark\" target=\"_blank\" href=\"https://etienne-services.fr\" rel=\"nofollow noopener noreferrer\">ÉTIENNE SERVICES</a>.",
                "logo" => "assets/images/etienne-services.jpeg",
                "interval" => "Septembre 2021 - Aujourd'hui",
                "tools" => [
                    "Flutter",
                    "Javascript",
                    "PHP",
                    "SQL - Mysql",
                    "HTML & CSS"
                ]
            ],
            [
                "title" => "Co-fondateur de <a class=\"text-underline text-dark\" target=\"_blank\" href=\"https://jant.tech\" rel=\"nofollow noopener noreferrer\">Jant TECH</a> et développeur front-end/back-end.",
                "logo" => "assets/images/jant-tech.png",
                "interval" => "Juillet 2020 - Aujourd'hui",
                "tools" => [
                    "Angular / Typescript",
                    "Javasript",
                    "PHP",
                    "SQL - Mysql",
                    "HTML & CSS",
                ]
            ],
            [
                "title" => "Tuteur en langage C à l' <a class=\"text-underline text-dark\" target=\"_blank\" href=\"https://galilee.univ-paris13.fr/\" rel=\"nofollow noopener noreferrer\">Institut Galilée - Université Sorbonne Paris Nord</a>.",
                "logo" => "assets/images/logo_institut_galilee.jpeg",
                "interval" => "Novembre 2020 - Juillet 2021",
                "tools" => []
            ],
        ];

        public static $experiencesEn = [
            [
                "title" => "Web and mobile developer at <a class=\"text-underline text-dark\" target=\"_blank\" href=\"https://etienne-services.fr\" rel=\"nofollow noopener noreferrer\">ETIENNE SERVICES</a>.",
                "logo" => "assets/images/etienne-services.jpeg",
                "interval" => "September 2021 - Present",
                "tools" => [
                    "Flutter",
                    "Javascript",
                    "PHP",
                    "SQL - Mysql",
                    "HTML & CSS"
                ]
            ],
            [
                "title" => "Co-founder of <a class=\"text-underline text-dark\" target=\"_blank\" href=\"https://jant.tech\" rel=\"nofollow noopener noreferrer\">Jant TECH</a> and front-end/back-end developer.",
                "logo" => "assets/images/jant-tech.png",
                "interval" => "July 2020 - Present",
                "tools" => [
                    "Angular / Typescript",
                    "Javasript",
                    "PHP",
                    "SQL - Mysql",
                    "HTML & CSS",
                ]
            ],
            [
                "title" => "Tutor of C programming language at <a class=\"text-underline text-dark\" target=\"_blank\" href=\"https://galilee.univ-paris13.fr/\" rel=\"nofollow noopener noreferrer\">Institut Galilée - Université Sorbonne Paris Nord</a>.",
                "logo" => "assets/images/logo_institut_galilee.jpeg",
                "interval" => "November 2020 - July 2021",
                "tools" => []
            ],
        ];

        public static $educationFr = [
            "supgal" => [
                "school" => "Sup Galilée - Université Sorbonne Paris Nord",
                "logo" => "assets/images/sup_galilee.png",
                "formation" => "Cycle d'ingénieur informatique",
                "interval" => "Depuis septembre 2020",
            ],
            "instgal" => [
                "school" => "Institut Galilée - Université Sorbonne Paris Nord",
                "logo" => "assets/images/institut_galilee.png",
                "formation" => "Deuxième année licence informatique",
                "interval" => "2019 - 2020"
            ],
            "ugb" => [
                "school" => "Université Gaston Berger, Sénégal",
                "logo" => "assets/images/ugb.png",
                "formation" => "Deuxième année licence Maths Physique Informatique",
                "interval" => "2017 - 2019"
            ]
        ];

        public static $educationEn = [
            "supgal" => [
                "school" => "Sup Galilée - Université Sorbonne Paris Nord",
                "logo" => "assets/images/sup_galilee.png",
                "formation" => "Computer engineering school",
                "interval" => "Since september 2020",
            ],
            "instgal" => [
                "school" => "Institut Galilée - Université Sorbonne Paris Nord",
                "logo" => "assets/images/institut_galilee.png",
                "formation" => "Second year computer science degree",
                "interval" => "2019 - 2020"
            ],
            "ugb" => [
                "school" => "Université Gaston Berger, Sénégal",
                "logo" => "assets/images/ugb.png",
                "formation" => "Second year undergraduate degree in Maths Physics Computer Science",
                "interval" => "2017 - 2019"
            ]
        ];

        public static $languages = [
            [
                "name" => "C",
                "logo" => "assets/images/langage_c.png"
            ],
            [
                "name" => "C++",
                "logo" => "assets/images/langage_cpp.png"
            ],
            [
                "name" => "Java",
                "logo" => "assets/images/java.svg"
            ],
            [
                "name" => "PHP",
                "logo" => "assets/images/php.svg"
            ],
            [
                "name" => "Javascript",
                "logo" => "assets/images/javascript.svg"
            ],
            [
                "name" => "HTML5",
                "logo" => "assets/images/html.png"
            ],
            [
                "name" => "CSS3",
                "logo" => "assets/images/css.svg"
            ],
            [
                "name" => "SQL",
                "logo" => "assets/images/sql.svg"
            ],
            [
                "name" => "Python",
                "logo" => "assets/images/python.png"
            ],
            [
                "name" => "Prolog",
                "logo" => "assets/images/swi-prolog.png"
            ],
            [
                "name" => "Ocaml",
                "logo" => "assets/images/ocaml.png"
            ]
        ];

        public static $techno = [
            [
                "name" => "Flutter",
                "logo" => "assets/images/flutter.jpeg"
            ],
            [
                "name" => "NodeJS",
                "logo" => "assets/images/nodejs.png"
            ],
            [
                "name" => "Angular",
                "logo" => "assets/images/angular.png"
            ],
            [
                "name" => "React",
                "logo" => "assets/images/react.svg"
            ],
            [
                "name" => "Symfony",
                "logo" => "assets/images/symfony.svg"
            ],
            [
                "name" => "MySQL",
                "logo" => "assets/images/mysql.png"
            ],
            [
                "name" => "Matlab",
                "logo" => "assets/images/matlab.png"
            ]
        ];

        public static $tools = [
            [
                "name" => "Git",
                "logo" => "assets/images/git.png"
            ],
            [
                "name" => "Linux",
                "logo" => "assets/images/linux.png"
            ],
            [
                "name" => "Visual Studio Code",
                "logo" => "assets/images/vscode.png"
            ]
        ];
    }
?>