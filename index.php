<?php
    namespace com\grupotoberto\jlmvc;
    require_once("./vendor/grupotoberto/jlweb/WebManager.php");
    require_once("./vendor/grupotoberto/jlmvc/routes/config.php");
    require_once("./vendor/grupotoberto/jlmvc/routes/router.php");

    $router = new Router();
    $router->run();