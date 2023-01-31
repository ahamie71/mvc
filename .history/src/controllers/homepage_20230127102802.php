<?php
var_dump(__DIR__);
die();
require_once(__DIR__ .'/../templates/homepage.php');
function homepage()
{
    $posts = getPosts();

    require_once(__DIR__ .'/../templates/homepage.php');
}