<?php
    class AppController {
        private static $instance = null;
        private $tabUrl;

        private function __construct()
        {
            $this->tabUrl = [
                "/fr/en" => "/en",
                "/fr/ru" => "/ru",
                "/en/fr" => "/fr",
                "/en/ru" => "/ru",
                "/ru/fr" => "/fr",
                "/ru/en" => "/en",
                "/experiences/en" => "/experience",
                "/experiences/ru" => "/опыт",
                "/experience/fr" => "/experiences",
                "/experience/ru" => "/опыт",
                "/опыт/fr" => "/experiences",
                "/опыт/en" => "/experience",
                "/formations/en" => "/education",
                "/formations/ru" => "/тренинги",
                "/education/fr" => "/formations",
                "/education/ru" => "/тренинги",
                "/тренинги/fr" => "/formations",
                "/тренинги/en" => "/education",
                "/competences/en" => "/skills",
                "/competences/ru" => "/навыки",
                "/skills/fr" => "/competences",
                "/skills/ru" => "/навыки",
                "/навыки/fr" => "/competences",
                "/навыки/en" => "/skills",
            ];
        }

        public function action() {
            if($_SERVER["REQUEST_URI"] === '/'){
                $languageSite = ['fr' => 'fr', 'en' => 'en', 'ru' => 'ru'];    // This is the only languages available for the website
                $lang = 'fr';
                $acceptLanguage = explode(',', $_SERVER["HTTP_ACCEPT_LANGUAGE"]);
                array_shift($acceptLanguage);
                $tablanguage = [];
                foreach($acceptLanguage as $value){
                    $tmp = explode(';', $value);
                    $tablanguage[$tmp[0]] = floatval(str_replace('q=', '', $tmp[1]));
                }

                foreach($tablanguage as $key => $value){
                    if(isset($languageSite[$key])){
                        $lang = $key;
                        header('Location: /' . $lang);
                        die();
                        break;
                    }
                }
            } else if(isset($this->tabUrl[$_SERVER["REQUEST_URI"]])){
                header("Location: " . $this->tabUrl[$_SERVER["REQUEST_URI"]]);
                die();
            }
        }

        public static function getInstance(){
            if(self::$instance === null){
                self::$instance = new AppController();
            }
            return self::$instance;
        }
    }
?>