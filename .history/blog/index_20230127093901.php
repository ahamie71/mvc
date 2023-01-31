<?php

require(__DIR__.'/../src/model.php');

$posts = getPosts();

require(__'templates/homepage.php');