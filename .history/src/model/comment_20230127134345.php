<?php

function createComment(string $post ,string $author ,string $comment)
{
    $database=commentDbConnect();
    $statement 