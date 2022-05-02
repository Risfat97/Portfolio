<?php
    require_once __DIR__ . "/../controllers/AppController.php";

    $appCtrl = AppController::getInstance();
    $appCtrl->action();
?>