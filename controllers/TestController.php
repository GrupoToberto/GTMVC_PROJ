<?php
    namespace com\myCompany\app;
    require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/grupotoberto/jlmvc/controllers/Controller.php');
    use com\grupotoberto\jlmvc\controllers\Controller as Controller;

    class TestController extends Controller{

        public function Welcome($Params){ //Sample to test many languages
            $lang=isset($Params) && count($Params)>0?$Params[0]:null;

            echo self::View($lang);
        }

    }