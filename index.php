<?php
require "./Profile/Views/front/front.view.php";
include "./Profile/controllers/controller.php";
use Controllers\Controller;
switch ($_SERVER['REQUEST_URI']) {
    case '/back':
        $test = new Controller();
        $test->reroute('back');
        break;

    default:
        '/';
        $test = new Controller();
        $test->reroute('front');
        break;
}
