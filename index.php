<?php
include_once 'controller/HomeController.php';
include_once 'controller/AboutController.php';

/*
* Dispatching the world
*/

$page = isset($_GET['page']) ? $_GET['page'] : NULL;

if($page != null) {
    if($page == 'about'){
        // About
        $AboutController = new AboutController();
        $AboutController->index();
    }else{
        $error = new errorpageController();
        $error->index();
    }
    
}else{
    // Home
    $HomeController = new HomeController();
    $HomeController->index();
}