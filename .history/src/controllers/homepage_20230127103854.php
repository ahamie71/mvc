<?php
require_once(dirname(__FILE__,2  )."/model.php");


function homepage()
{
    $posts = getPosts();

    var_(__DIR__ .'/../templates/homepage.php');
}