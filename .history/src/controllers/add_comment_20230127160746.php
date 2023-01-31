<?php
require_once(dirname(__FILE__,2) ."/model/comment.php");
<?php

require_once('src/model/comment.php');

function addComment(string $post, array $input)
{
    $author = null;
    $comment = null;
    if (!empty($input['author']) && !empty($input['comment'])) {
        $author = $input['author'];
        $comment = $input['comment'];
    } else {
        die('Les données du formulaire sont invalides.');
    }

    $success = createComment($post, $author, $comment);
    if (!$success) {
        die('Impossible d\'ajouter le commentaire !');
    } else {
        header('Location: index.php?action=post&id=' . $post);
    }
}