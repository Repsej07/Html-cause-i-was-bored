<?php
use Controllers\HomeController;
use Controllers\AboutController;
use Controllers\ContactController;
include("Profile/controllers/HomeController.php");
include("Profile/controllers/AboutController.php");
include("Profile/controllers/ContactController.php");

switch ($_SERVER['REQUEST_URI']) {
    case '/about':
        $test = new AboutController();
        $test->reroute('about');
        break;
    case '/contact':
        $test = new ContactController();
        $test->reroute('contact');
        break;
    case '/':    
       $test = new HomeController();
       $test->reroute('home');
        break;
}  

