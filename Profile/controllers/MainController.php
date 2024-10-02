<?php
class MainController 
{
    public function reroute($path)
    {
        return require "./Profile/Views/$path/$path.view.php";
    }
}
