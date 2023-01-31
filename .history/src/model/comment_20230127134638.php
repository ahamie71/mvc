<?php
function createComment(string $post, string $author, string $comment)
{
	$database = commentDbConnect();
	$statement = $database->prepare(
    	'INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())'
	);
	$affectedLines = $statement->execute([$post, $author, $comment]);

	return ($affectedLines > 0);
}
function commentDbConnect()
{
	try {
    	$database = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'password');

    	return $database;
	} catch(Exception $e) {
    	die('Erreur : '.$e->getMessage());
	}
}