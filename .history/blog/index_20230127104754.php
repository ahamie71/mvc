<?php

require_once(__DIR__ . '/../src/controllers/homepage.php');
var_dump()
require_once(__DIR__.'/../src/controllers/post.php');

if (isset($_GET['action']) && $_GET['action'] !== '') {
	if ($_GET['action'] === 'post') {
    	if (isset($_GET['id']) && $_GET['id'] > 0) {
        	$identifier = $_GET['id'];

        	post($identifier);
    	} else {
        	echo 'Erreur : aucun identifiant de billet envoyé';

        	die;
    	}
	} else {
    	echo "Erreur 404 : la page que vous recherchez n'existe pas.";
	}
} else {
	homepage();
}