<?php
require_once(dirname(__FILE__,2  )."/model.php");
 
function post(string $identifier)
{
    $post=getPost($identifier);
    $comment=getComments($identifier);
    var_dump(dirname(__FILE__,2  )."/templates/model.php");
    die();

}




