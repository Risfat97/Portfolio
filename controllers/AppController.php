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
            if(isset($this->tabUrl[$_SERVER["REQUEST_URI"]])){
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