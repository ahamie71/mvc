<?php
var_dump(__DIR__);
require_once('/../src/model.php');
function homepage()
{
    $posts = getPosts();

    require_once(__DIR__ .'/../templates/homepage.php');
}