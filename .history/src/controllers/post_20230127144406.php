<?php
require_once(dirname(__FILE__,2  )."/model.php");
require_once(dirname(__FILE__,3  )."/comment.php");
 
function post(string $identifier)
{
    $post=getPost($identifier);
    $comment=getComments($identifier);

    require_once(dirname(__FILE__,3  )."/templates/post.php");
    

}




