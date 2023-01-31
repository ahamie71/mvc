<?php
unction createComment(string $post, string $author, string $comment)
{
	$database = commentDbConnect();
	$statement = $database->prepare(
    	'INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())'
	);
	$affectedLines = $statement->execute([$post, $author, $comment]);

	return ($affectedLines > 0);
}