<?php
var_dump(dirname(__FILE__,0));
die();
require_once(__DIR__ .'/../src/model.php');
function homepage()
{
    $posts = getPosts();

    require_once(__DIR__ .'/../templates/homepage.php');
}