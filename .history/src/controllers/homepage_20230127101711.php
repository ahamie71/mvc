<?php

require(__DIR__ . '/../src/model.php');
function homepage()
{


    $posts = getPosts();

    require(__DIR__ . '/../templates/homepage.php');
}