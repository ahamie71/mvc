<?php

require_once('MVC/src/model.php');
function homepage()
{


    $posts = getPosts();

    require_once(__DIR__ . '/../templates/homepage.php');
}