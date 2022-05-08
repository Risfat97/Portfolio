<?php
    class AppController {
        private static $instance = null;
        private $tabUrl;

        private function __construct()
        {
            $this->tabUrl = [
                "/fr/en" => "/en",
                "/en/fr" => "/fr",
                "/experiences/en" => "/experience",
                "/experience/fr" => "/experiences",
                "/formations/en" => "/education",
                "/education/fr" => "/formations",
                "/competences/en" => "/skills",
                "/skills/fr" => "/competences"
            ];
        }

        public function action() {
            if($_SERVER["REQUEST_URI"] === '/'){
                $languageSite = ['fr' => 'fr', 'en' => 'en'];    // This is the only languages available for the website
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