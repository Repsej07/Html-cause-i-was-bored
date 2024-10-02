<?php
require "./Profile/Views/front/front.view.php";
include"controller.php";
switch ($_SERVER['REQUEST_URI']) {
    case '/':
        $test = '';
        break;
    
    default:
        # code...
        break;
}
