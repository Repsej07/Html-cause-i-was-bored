<?php
require "./Profile/Views/front/front.view.php";
include("./Profile/controllers/controller.php");
use controller\controller;
switch ($_SERVER['REQUEST_URI']) {
    case '/':
        $test = '';
        break;
    
    default:
        # code...
        break;
}
