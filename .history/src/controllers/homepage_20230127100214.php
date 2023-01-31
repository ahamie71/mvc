<?php

require-once(__DIR__.'/../src/model.php');

$posts = getPosts();

require(__DIR__.'/../templates/homepage.php');