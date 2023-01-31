<?php
var_dump(__FILE
die();
require_once(__DIR__ .'/../src/model.php');
function homepage()
{
    $posts = getPosts();

    require_once(__DIR__ .'/../templates/homepage.php');
}