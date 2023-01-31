<?php
require_once(dirname(__FILE__,2  )."/model.php");


function homepage()
{
    $posts = getPosts();

    require_once(dirname(__FILE__,2  )."/model.php");
    var_dump(dirname(__FILE__,2) .'templates/homepage.php');
    die();
}