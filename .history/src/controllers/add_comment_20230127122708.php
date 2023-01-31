<?php
require_once(dirname(__FILE__,2) ."/src/model/comment.php");

//On creer une fonction addComment qui prend en parametre l'identifiant du billet concerné , et un  imput sous forme de tableau , ce sont le sdonnées soumises par le formulaire
function AddComment( string  $post , array $imput ){

    $author = null;
    $comment = null;
    if(!empty($imput['author']) && !empty($imput['comment'])){

        $author= $input['author'];
        $comment= $input['comment'];

    }else{

        die('les données du formulaire sont invalides ');

        }

$success= createComment( $post, $comment,$author );

if(!$success){

    die('Impossible d\ajouter le do)
}


}