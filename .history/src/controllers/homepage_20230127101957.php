<?php

require_once('MVCsrc/model.php');
function homepage()
{


    $posts = getPosts();

    require_once(__DIR__ . '/../templates/homepage.php');
}