<?php
    namespace com\myCompany\app;
    require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/grupotoberto/jlmvc/controllers/Controller.php');
    use com\grupotoberto\jlmvc\controllers\Controller as Controller;

    class TestController extends Controller{

        public function Welcome(){
            echo self::View();
        }

    }