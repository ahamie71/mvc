<?php
require_once(dirname(__FILE__,2 ).'/src/controllers/add_comment.php');
require_once(dirname(__FILE__,2 ).'/src/controllers/homepage.php');

require_once(dirname(__FILE__,2).'/src/controllers/post.php');

if (isset($_GET['action']) && $_GET['action'] !== '') {
	if ($_GET['action'] === 'post') {
    	if (isset($_GET['id']) && $_GET['id'] > 0) {
        	$identifier = $_GET['id'];

        	post($identifier);
    	} else {
        	echo 'Erreur : aucun identifiant de billet envoyé';

        	die;
    	}
      elseif($_GET['action']=== 'addComment') {
         
	} else {
    	echo "Erreur 404 : la page que vous recherchez n'existe pas.";
	}
} else {
	homepage();
}
