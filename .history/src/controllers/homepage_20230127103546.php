<?php
var_dump(dirname(__FILE__,2  ) ."toto);
die();
require_once(__DIR__ .'/../src/model.php');
function homepage()
{
    $posts = getPosts();

    require_once(__DIR__ .'/../templates/homepage.php');
}