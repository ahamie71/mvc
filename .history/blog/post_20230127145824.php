<?php

require_once(dirname(__FILE__,2).'/src/model.php');

if (isset($_GET['id']) && $_GET['id'] > 0) {
    $identifier = $_GET['id'];
} else {
    echo 'Erreur : aucun identifiant de billet envoyé';

    die;
}



require_once(dirname(__FILE__,2).'/templates/post.php');