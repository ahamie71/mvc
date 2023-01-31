<?php
require_once(dirname(__FILE__,2  )."/model.php");
 
function post(string $identifier)
{
    $post=getPost($identifier);
    $comment=getComments($identifier);
    require_once(dirname(__FILE__,2  )."/model.php");
    require(__DIR__.'/../templates/post.php');

}




