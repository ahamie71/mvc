<?php
require_once(__DIR__.'/../src/model.php');
 
function post(string $identifier)
{
    $post=getPost($identifier);
    $comment=getComments($identifier);
    require(__DIR__.'/../templates/post.php');

}




require(__DIR__.'/../templates/post.php');