<?php


function homepage()
{


    $posts = getPosts();

    require(__DIR__ . '/../templates/homepage.php');
}