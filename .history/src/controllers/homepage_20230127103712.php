<?php
require_once(dirname(__FILE__,2  )."/model.php");
die();

function homepage()
{
    $posts = getPosts();

    require_once(__DIR__ .'/../templates/homepage.php');
}