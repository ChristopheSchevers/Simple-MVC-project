<?php
include_once 'model/HTMLTemplate.php';

class HomeController
{
    public function index()
    {
        $HTMLTemplate = new HTMLTemplate('Best homepage title in the world!');

        include_once 'view/home/homeView.php';

        unset($HTMLTemplate);
    }
}
