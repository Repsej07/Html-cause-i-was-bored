<?php
switch ($_SERVER['REQUEST_URI']) {
    case '/about':
        require './Profile/Views/About/about.view.php';
        break;
    case '/contact':
        require './Profile/Views/Contact/contact.view.php';
        break;
    case '/':    
        require './Profile/Views/Home/home.view.php';
        break;
}  

