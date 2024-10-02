<?php
require "./Profile/Views/front/front.view.php";
include "(/Users/jespermeuzelaar/Html dag 1 retrial/Profile/controllers/MainController.php)";
switch ($_SERVER['REQUEST_URI']) {
    case '/back':
        $test = new MainController();
        $test->reroute('back');
        break;

    default:
        '/';
        $test = new MainController();
        $test->reroute('front');
        break;
}
