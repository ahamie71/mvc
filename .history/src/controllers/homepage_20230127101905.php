<?php

require('./../src/model.php');
function homepage()
{


    $posts = getPosts();

    require_(__DIR__ . '/../templates/homepage.php');
}