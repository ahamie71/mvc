<?php
require_once(__DIR__.'/../src/model.php');
 
function post(string $identifier)
{
    $post=getPost($identifier);
    $comment=getComment($identifier);

}




require(__DIR__.'/../templates/post.php');