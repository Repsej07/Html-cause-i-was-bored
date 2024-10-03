<?php
include "Profile/controllers/MainController.php";
switch ($_SERVER['REQUEST_URI']) {
    case '/back':
        $test = new MainController();
        $test->reroute('back');
        break;

    case '/front':
        $test = new MainController();
        $test->reroute('front');
        break;
}
