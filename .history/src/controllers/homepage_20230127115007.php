<?php
require_once(dirname(__FILE__, 2) . "/model.php");
function homepage()
{
    $posts = getPosts();
    require_once(dirname(__FILE__, 3) . '/templates/homepage.php');

}