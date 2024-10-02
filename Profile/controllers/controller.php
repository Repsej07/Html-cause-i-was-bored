<?php
class controller 
{
    public function reroute($path)
    {
        return require "./Profile/Views/$path/$path.view.php";
    }
}
