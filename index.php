<?php
switch ($_SERVER['REQUEST_URI']) {
    case '/about':
        require './Profile/Views/About/about.view.php';

    case '/contact':
        require './Profile/Views/Contact/contact.view.php';
    default:
        require './Profile/Views/Home/home.view.php';
}
