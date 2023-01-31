<?php

require('__DIR__.src/model.php');

$posts = getPosts();

require('templates/homepage.php');