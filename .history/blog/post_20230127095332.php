<?php


 
require(__DIR'src/model.php');
 
if (isset($_GET['id']) && $_GET['id'] > 0) {
    $identifier = $_GET['id'];
} else {
    echo 'Erreur : aucun identifiant de billet envoyé';
 
    die;
}

$post = getPost($identifier);
$comments = getComments($identifier);

-


require(__DIR__.'/../templates/post.php');