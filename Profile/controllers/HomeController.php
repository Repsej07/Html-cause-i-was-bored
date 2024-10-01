<?php
namespace Controllers;
class HomeController
{
    public function reroute($path)
    {
        return require "./Profile/Views/$path/$path.view.php";
    }

}
