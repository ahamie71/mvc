<?php
var_dump(
die();
require_once(__DIR__ .'/../src/model.php');
function homepage()
{
    $posts = getPosts();

    require_once(__DIR__ .'/../templates/homepage.php');
}